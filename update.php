<html>

<body>

 

 

<?php

$host='localhost';
$user='id7889638_vegeto';
$pass='logmein';
$db='id7889638_maktabidb';

$con = mysql_connect($host,$user,$pass,$db);

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db($db, $con);

 
 ;
/*
$sql="UPDATE `slip` SET `slip_date` = '$_POST[slip_date]', `slip_rdate` = '$_POST[slip_rdate]', `slip_cname` = 'Animalerie',`slip_ccontact` = 'Animalerie', `slip_mreference` = 'pc caisse tactile', `slip_faultdesc` = 'Assemblage de l ensemble pc caisse tactile+ clavier+souris+douchette+imprimante a ticket+Mise en réseaux du tout', `slip_intervention` = 'Assemblage et petite formation d utilisation pour la caissière', `slip_components` = 'Cable réseaux 1.5m', `slip_reparer` = '$_POST[slip_reparer', `slip_price` = '$_POST[slip_price]' WHERE `slip`.`slip_nr` = '$_POST[slip_nr]')";

VALUES

('$_POST[slip_nr]','$_POST[slip_date]','$_POST[slip_rdate]','$_POST[slip_cname]','$_POST[slip_ccontact]','$_POST[slip_cadress]','$_POST[slip_ctel]','$_POST[slip_cmobile]','$_POST[slip_cmail]','$_POST[slip_mreference]','$_POST[slip_mdesign]','$_POST[slip_mserial]','$_POST[slip_mstatus]','$_POST[slip_faultdesc]','$_POST[slip_intervention]','$_POST[slip_components]','$_POST[slip_reparer]','$_POST[slip_price]')

*/ 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>