<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-auto2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage delete auto 2</h1>

<p>
    Op klantid gegevens zoekt uit de
    tabel auto van de database garage
    zodat ze verwijderd kunnen worden.
</p>
<?php
$klantid2 = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("select autokenteken, automerk, autotype, autokmstand, klantid2 from auto where autokenteken = :autokenteken");

$sql->execute(["autokenteken" => $klantid2]);

echo "<table style= 'font-family: Imprima, sans-serif'>";
echo "<tr>";
echo "<th style='color: darkviolet'>autokenteken</th>";
echo "<th style='color: blue'>automerk</th>";
echo "<th style='color: green'>autotype</th>";
echo "<th style='color: black'>autokmstand</th>";
echo "<th style='color: red'>klantid</th>";
echo "</tr>";

foreach ($sql as $rij) {
    echo "<tr style='text-align: center'>";
    echo "<td style='color: blue'>" . $rij["autokenteken"] . "</td>";
    echo "<td style='color: green'>" . $rij["automerk"] . "</td>";
    echo "<td style='color: black'>" . $rij["autotype"] . "</td>";
    echo "<td style='color: darkviolet'>" . $rij["autokmstand"] . "</td>";
    echo "<td style='color: red'>" . $rij["klantid2"] . "</td>";
    echo "</tr>";

}
echo "</table><br/>";

echo "<form action='gar-delete-auto3.php' method= 'post'>";

echo "<input type='hidden' name='autokentekenvak' value=$klantid2>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<label class='check'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "<span class='checkmark'></span>";
echo "</label>";
echo "&emsp;&emsp;Verwijder deze auto. <br/><br/>";
echo "<input type='submit'>";
echo "</form>";

?>
</body>

</html>