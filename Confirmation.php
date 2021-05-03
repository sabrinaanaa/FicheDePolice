<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  

require 'vendor/autoload.php'; 


 



$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$filename = str_replace( array("@", ".", "/"), '', $email);
$place0 = $_POST['place0'];
$place = $_POST['place'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cin = $_POST['cin'];
$passeport = $_POST['passeport'];
$sejour = $_POST['sejour'];


$newFileName = $_SESSION['newFileName'];


$image = "";
    if (isset($_POST["signature"]))
    {
	 // requires php5
    define('UPLOAD_DIR', 'img/');
    $img = $_POST['signature'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
   /* $file = UPLOAD_DIR . uniqid() . '.png';  */
   $file = UPLOAD_DIR . $filename . '.png';
    $success = file_put_contents($file, $data);
    
		
        $image = $_POST["signature"];
        
    } else {
        echo "<p>Pas de Signature</p>";
    }	



$bodytext = $_POST['bodytext'];

$from = $email;
$from_name = $lastName." ".$firstName;
$subject = $_POST['subject'];
$to = $_POST['to'];


$message = '<html><!doctype html>
<html lang="en">
  <head>
  <link href="w3.css" type="text/css" rel="stylesheet" />

    <style type="text/css">
        .m-signature-pad--body canvas {
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            height: 250px;
            border: 1px solid #CCCCCC;
        }    
    </style>
	
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Sabri Naanaa IT manager Orangers Garden">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Confirmation</title>
	
	

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  
  
  
 <body class="bg-light">
 
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">
    <h2>Fiche De Police</h2>
    <p class="lead">made by sab</p>
  </div>
  
   
   
   <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName"></label> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ';
$message .= '<h1>Hello,</h1>';


$message .= 
"This Mail is sent from   ".$email."<br>Client name is:   ".$firstName."<br>Last name is:   ".$lastName."<br>Birth Date is:   ".$birth."<br>Adress is:   ".$place0.
	"<br>Adress2 is:   ".$place."<br>Country is:   ".$country."<br>State is:   ".$state."<br>Zip Code is:   ".$zip."<br>CIN is:   ".$cin."<br>Passeport is:   ".$passeport.
	"<br>Sejour is:   ".$sejour."<br>Comments are:   ".$bodytext;

$message .= '</div></div><footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Orangers Garden</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

        
		</body>
</html> ';	
	

$mail = new PHPMailer(true); 
 
try { 
    /*$mail->SMTPDebug = 2;        */                                
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'lesorangersgarden0@gmail.com';                  
    $mail->Password   = '25014457';                         
    $mail->SMTPSecure = 'ssl';                               
    $mail->Port       = 465;   
  
    $mail->setFrom($from, $from_name);            
    $mail->addAddress($to); 
   
       
    $mail->isHTML(true);                                   
    $mail->Subject = $subject; 
    $mail->Body    = $message; 
    $mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$file_to_attach = './img/'.$filename.'.png';
	$attachement1 = './img/'.$filename.'.png';
	$attachement2 = './Upload/'.$newFileName.'';

    $mail->AddAttachment( $file_to_attach , $filename.'.png' );
    $mail->addAttachment('./Upload/'.$newFileName.'');
	
    $mail->send(); 
   
 
 


?>

<!doctype html>
<html lang="en">
  <head>
  <link href="w3.css" type="text/css" rel="stylesheet" />

    <style type="text/css">
        .m-signature-pad--body canvas {
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            height: 250px;
            border: 1px solid #CCCCCC;
        }    
    </style>
	
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Sabri Naanaa IT manager Orangers Garden">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Confirmation</title>
	
	<?php

	/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

*/

?>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
   <body class="bg-light">
 
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="./bootstrap/brand/logo.png" alt="" width="72" height="72">
    <h2>Fiche De Police</h2>
    <p class="lead">made by sab</p>
  </div>
   
   <?php
   
   
$host='localhost';
$user='root';
$pass='';
$db='fichedepolice';

$con = mysqli_connect($host,$user,$pass,$db);

$query = "INSERT INTO `fiche`  (`firstname`, `lastname`, `birth`, `email`, `place0`, `place`, `country`, `state`, `zip`, `cin`, `passeport`, `sejour`, `attachement1`, `attachement2`) 
VALUES ('$firstName','$lastName','$birth','$email','$place0','$place','$country','$state','$zip','$cin','$passeport','$sejour','$attachement1','$attachement2');";
			  $result = mysqli_query($con,$query);
			  
			  
mysqli_close($con);



   
   
   print $success ? $file : 'Unable to save the file.';
   echo "<br>Voici votre signature"; 
   
  echo "<img src=\"" . $image . "\">";
		
 
   
    echo "<br>Merci et BienVenu dans notre Merveilleux Hotel!"; 
} catch (Exception $e) { 
  /*  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; */
} 
   ?>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Orangers Garden</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="jquery-3.5.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="./bootstrap/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="./bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script>
		</body>
</html>