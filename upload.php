<?php
session_start();
 
 








 if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }
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


$_SESSION['firstName']=$firstName;
$_SESSION['lastName']=$lastName;
$_SESSION['birth']=$birth;
$_SESSION['email']=$email;
$_SESSION['place0']=$place0;
$_SESSION['place']=$place;
$_SESSION['country']=$country;
$_SESSION['state']=$state;
$_SESSION['zip']=$zip;
$_SESSION['cin']=$cin;
$_SESSION['passeport']=$passeport;
$_SESSION['sejour']=$sejour ;
 
 
 
 
 
 
$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $filename0 = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $filename0);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // sanitize file-name
    $newFileName =  $filename . '.' . $fileExtension;
	
	$_SESSION['newFileName']=$newFileName ;
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './Upload/';
      $dest_path = $uploadFileDir . $newFileName;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['message'] = $message;
header("Location: review.php");