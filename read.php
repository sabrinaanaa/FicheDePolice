<html>

<body>

 

 

<?php

$host='localhost';
$user='root';
$pass='';
$db='hotel';

$con = mysqli_connect($host,$user,$pass,$db);


$sql="SELECT * FROM clients";


// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " .mysqli_connect_error();
}

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Nr.Fiche</th>
<th>Date</th>
<th>Date Reception</th>
<th>Client</th>
<th>Contact</th>
<th>Adresse</th>
<th>Nr.Tel</th>
<th>Mobile</th>
<th>Mail</th>
<th>Reference Machine</th>
<th>Modele</th>
<th>Nr. de serie</th>
<th>Etat</th>
<th>Desc Panne</th>
<th>Intervention</th>
<th>OBSERVATION & COMPOSANTS REMPLACER</th>
<th>Technicien</th>
<th>Prix</th>
<th>Etat Payement</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['slip_nr'] . "</td>";
echo "<td>" . $row['slip_date'] . "</td>";
echo "<td>" . $row['slip_rdate'] . "</td>";
echo "<td>" . $row['slip_cname'] . "</td>";
echo "<td>" . $row['slip_ccontact'] . "</td>";
echo "<td>" . $row['slip_cadress'] . "</td>";
echo "<td>" . $row['slip_ctel'] . "</td>";
echo "<td>" . $row['slip_cmobile'] . "</td>";
echo "<td>" . $row['slip_cmail'] . "</td>";
echo "<td>" . $row['slip_mreference'] . "</td>";
echo "<td>" . $row['slip_mdesign'] . "</td>";
echo "<td>" . $row['slip_mserial'] . "</td>";
echo "<td>" . $row['slip_mstatus'] . "</td>";
echo "<td>" . $row['slip_faultdesc'] . "</td>";
echo "<td>" . $row['slip_intervention'] . "</td>";
echo "<td>" . $row['slip_components'] . "</td>";
echo "<td>" . $row['slip_reparer'] . "</td>";
echo "<td>" . $row['slip_price'] . "</td>";
echo "<td>" . $row['slip_PaymentStatus'] . "</td>";

echo "</tr>";
}
echo "</table>";





mysqli_close($con)

?>

</body>

</html>