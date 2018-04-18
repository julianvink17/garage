<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-zoek-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>
<body>
    <h1>Garage zoek op klantid 2</h1>
    <p>
        Op klantid gegevens zoeken uit de
        tabel klaten van de database garage.
    </p>
<?php
error_reporting(0);
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats, klantemail from klant where klantid = :klantid");

$sql->execute(["klantid" => $klantid]);

echo "<a href='index.html'> Terug naar het menu </a>";


echo "<table border='1px' style= 'font-family: Imprima, sans-serif'>";
echo "<tr style='border-color: #09810c'>";
echo "<th style='color: red'>ID</th>";
echo "<th style='color: #294181'>Naam</th>";
echo "<th style='color: #294181'>Adres</th>";
echo "<th style='color: #294181'>Postcode</th>";
echo "<th style='color: #294181'>Plaats</th>";
echo "<th style='color: #294181'>Email</th>";
echo "</tr>";

    foreach ($sql as $rij) {
        echo "<tr style='text-align: center'>";
        echo "<td style='color: red'>" . $rij["klantid"] . "</td>";
        echo "<td>" . $rij["klantnaam"] . "</td>";
        echo "<td>" . $rij["klantadres"] . "</td>";
        echo "<td>" . $rij["klantpostcode"] . "</td>";
        echo "<td>" . $rij["klantplaats"] . "</td>";
        echo "<td>" . $rij["klantemail"] . "</td>";
        echo "</tr>";
        $value = $rij["klantid"];
    }
    echo "</table><br/>";

if($value > 0) {
    echo "GEVONDEN!";
}
else{
    echo "ID NIET BESCHIKBAAR!";

}

?>
</body>
</html>


