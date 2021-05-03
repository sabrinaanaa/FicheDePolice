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

 

$sql="INSERT INTO slip (slip_nr, slip_date,slip_rdate,slip_cname,slip_ccontact,slip_cadress,slip_ctel,slip_cmobile,slip_cmail,slip_mreference,slip_mdesign,slip_mserial,slip_mstatus,slip_faultdesc,slip_intervention,slip_components,slip_reparer,slip_price,slip_PaymentStatus)

VALUES

('$_POST[slip_nr]','$_POST[slip_date]','$_POST[slip_rdate]','$_POST[slip_cname]','$_POST[slip_ccontact]','$_POST[slip_cadress]','$_POST[slip_ctel]','$_POST[slip_cmobile]','$_POST[slip_cmail]','$_POST[slip_mreference]','$_POST[slip_mdesign]','$_POST[slip_mserial]','$_POST[slip_mstatus]','$_POST[slip_faultdesc]','$_POST[slip_intervention]','$_POST[slip_components]','$_POST[slip_reparer]','$_POST[slip_price]','$_POST[slip_PaymentStatus]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>