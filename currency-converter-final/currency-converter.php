<?php
  session_start();
   
  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: authentication/login.php");
      exit;
  }

//check if from_currency, to_currency, amount are set

if(isset($_POST['from_currency']) && isset($_POST['to_currency'])  && isset($_POST['amount'])  )
{
	$from_currency 	= 	$_POST['from_currency'];
	$to_currency 	= 	$_POST['to_currency'];
	$amount 		= 	$_POST['amount'];
	if($from_currency == $to_currency)
	{	
		$response = array('error'=>1,'message'=>'From Currency & TO Currency Must be Different','converted_result'=>'');
		echo json_encode($response);
		die;
	}
	else
	{
		$converted_result = convertCurrency( $amount, $from_currency, $to_currency );
		$response = array('error'=>0,'message'=>'ok','converted_result'=>$converted_result);
		echo json_encode($response);
		die;
	}
}

//using free api for currency rates

function convertCurrency( $amount , $from_currency , $to_currency ){
  
  $from_Currency = urlencode($from_currency);
  $to_Currency = urlencode($to_currency);
  $query =  "{$from_Currency}_{$to_Currency}";
  $json = file_get_contents("http://free.currencyconverterapi.com/api/v6/convert?q={$query}&compact=ultra&apiKey=e49e9a21b7fdcb717f35");//using free api for currency rates
  $obj = json_decode($json, true);

  $val = floatval($obj["$query"]);


  $total = $val * $amount;//do the math
  return number_format($total, 2, '.', '');
}

?>