 <style>

   .action{
     background:red;
     padding:14px;
     left:100%;
     height:50px;
     width:150px;
     color:white;
   }
   button{
     font-size:16px;
     margin:10px;
   }
   
   

   
 </style>

</head>
<body>
  <!-- nvaigation start -->
  <div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Начален екран</a></li>
            <li class="active"><a href="about.php">Инфо</a></li>
            <li class="active"><a href="help.php">Помощ</a></li>
            <li class="action">
              <?php
              if (isset($_SESSION["username"]))
                    echo $_SESSION['username']; ?>
            </li>
            <button class="logout" > <a href="authentication/logout.php">Излизане от акаунта.</a></button>

          </ul>
          
        
        </div>
      </div>
  </div>
  <!-- nvaigation end -->

	<div class="container" style="min-height:500px;">
    
    <!-- for custom usages div-->
     