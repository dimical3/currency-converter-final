<?php

session_start();
 
// Check for logged in user
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: authentication/login.php");
    exit;
}
 
// calling database db-users.php
require_once "../dbconnections/db-users.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Въведете потребителско име.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Въведете парола.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ../index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "Въведената парола не е валидна.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "Няма намерен акаунт с това име.";
                }
            } else{
                echo "Нещо се обърка! Опитайте по-късно.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="favicon.png">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; 
        background-image: url("fon2.jpg");
        background-size: cover; }
        .wrapper{ width: 350px; padding: 20px;
            left: 35%;
            margin-top:50px;
            background: rgb(47,79,79,0.4);
            
            position:absolute ;
        
        }
        h2,p,label {
            color:rgb(255,228,225);
        }
        a {
            color:rgb(128,0,0);
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Запълнете полетата за да се впишете!</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label >Потребителско име:</label>
                <input type="text" placeholder="Username" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Парола:</label>
                
                <input type="password"  placeholder="Password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Влизане">
            </div>
            <p>Нямаш акаунт? <a class="btn btn-primary" href="register.php">Регистрирайте се!</a>.</p>
        </form>
    </div>
</body>
</html>