<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-zoek-auto2id.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>
<body>
<h1>Garage zoek op autokenteken 2</h1>
<p>
    Op autokenteken gegevens zoeken uit de
    tabel auto van de database garage.
</p>
<?php
error_reporting(0);
$autokenteken = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("select autokenteken, automerk, autotype, autokmstand, klantid2 from auto where autokenteken = :autokenteken");

$sql->execute(["autokenteken" => $autokenteken]);

echo "<a href='index.html'> Terug naar het menu </a>";


echo "<table style= 'font-family: Imprima, sans-serif'>";
echo "<tr>";
echo "<th style='color: darkviolet'>autokenteken</th>";
echo "<th style='color: black'>automerk</th>";
echo "<th style='color: green'>autotype</th>";
echo "<th style='color: blue'>autokmstand</th>";
echo "<th style='color: red'>klantid</th>";
echo "</tr>";

foreach ($sql as $rij) {
    echo "<tr style='text-align: center'>";
    echo "<td style='color: darkviolet'>" . $rij["autokenteken"] . "</td>";
    echo "<td style='color: black'>" . $rij["automerk"] . "</td>";
    echo "<td style='color: green'>" . $rij["autotype"] . "</td>";
    echo "<td style='color: blue'>" . $rij["autokmstand"] . "</td>";
    echo "<td style='color: red'>" . $rij["klantid2"] . "</td>";
    echo "</tr>";

}
echo "</table><br/>";

/*if($rij["klantid"] > 0) {
    echo "GEVONDEN!";
}
else{
    echo "ID NIET GEVONDEN!";

}*/

?>
</body>
</html>


