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


echo "<table style= 'font-family: Imprima, sans-serif'>";
echo "<tr>";
echo "<th style='color: red'>ID</th>";
echo "<th style='color: blue'>Naam</th>";
echo "<th style='color: green'>Adres</th>";
echo "<th style='color: black'>Postcode</th>";
echo "<th style='color: darkviolet'>Plaats</th>";
echo "<th style='color: orangered'>Email</th>";
echo "</tr>";


    foreach ($sql as $rij) {
        echo "<tr style='text-align: center'>";
        echo "<td style='color: red'>" . $rij["klantid"] . "</td>";
        echo "<td style='color: blue'>" . $rij["klantnaam"] . "</td>";
        echo "<td style='color: green'>" . $rij["klantadres"] . "</td>";
        echo "<td style='color: black'>" . $rij["klantpostcode"] . "</td>";
        echo "<td style='color: darkviolet'>" . $rij["klantplaats"] . "</td>";
        echo "<td style='color: orangered'>" . $rij["klantemail"] . "</td>";
        echo "</tr>";

    }
    echo "</table><br/>";

if($rij["klantid"] > 0) {
    echo "GEVONDEN!";
}
else{
    echo "ID NIET GEVONDEN!";

}

?>
</body>
</html>


