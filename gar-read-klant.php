<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ger-read-klant.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
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

    $sql = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats, klantemail from klant");

    $sql->execute();
echo "<table border='1px' style= 'font-family: Imprima, sans-serif'>";
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
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "<td>" . $rij["klantemail"] . "</td>";
    echo "</tr>";
    $value = $rij["klantid"];
}
echo "</table><br/>";
        echo "<a href='index.html'> Terug naar het menu </a>"
    ?>
</body>
</html>
