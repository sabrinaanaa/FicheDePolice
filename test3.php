<?php

if(isset($_POST['upload'])){

$fileName = $_FILES['userfile']['name'];
$tmpName = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$uploadDir = './Upload/';
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);
}
?>

<html>
<head>
</head>
<body>
<form action="<?php echo $PHP_SELF; ?>" method="post" enctype="multipart/form-data" >


<input type="file" name="file" id="file">
<input class="upload-video-form-input" type="hidden" name="form_submitted" value="yes" />
<input type="submit" value="submit" />



</form>
</body>
</html>

