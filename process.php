<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Unterschriftenfeld in HTML mit Signature Pad</title>   
    <meta name="description" content="Unterschriftenfeld in HTML mit Signature Pad" />   
    <link href="w3.css" type="text/css" rel="stylesheet" />

</head>

<body>
    <h1>Übermittelte Unterschrift</h1>

<?php    
    $image = "";
    if (isset($_POST["signature"]))
    {
		
		
 // requires php5
    define('UPLOAD_DIR', 'img/');
    $img = $_POST['signature'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    print $success ? $file : 'Unable to save the file.';
		
        $image = $_POST["signature"];
        echo "<img src=\"" . $image . "\">";
    } else {
        echo "<p>Kein Bild übertragen</p>";
    }
?>

</body>
</html>

