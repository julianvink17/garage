<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ger-read-klant.php</title>
    <link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
</head>
<body>
<h1>Garage read klant</h1>
<p>
    Dit zijn alle gegevens uit de
    tabel klanten van de database garage.
</p>
<?php
    require_once "gar-connect.php";

    $sql = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats from klant");

    $sql->execute();
echo "<table border='1px' style= 'font-family: Imprima, sans-serif'>";
echo "<tr style='border-color: #09810c'>";
echo "<th style='color: red'>ID</th>";
echo "<th style='color: #294181'>Naam</th>";
echo "<th style='color: #294181'>Adres</th>";
echo "<th style='color: #294181'>Postcode</th>";
echo "<th style='color: #294181'>Plaats</th>";
echo "</tr>";

foreach ($sql as $rij) {
    echo "<tr style='text-align: center'>";
    echo "<td style='color: red'>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "</tr>";
    $value = $rij["klantid"];
}
echo "</table><br/>";
        echo "<a href='gar-menu.php'> Terug naar het menu </a>"
    ?>
</body>
</html>
