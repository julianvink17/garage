<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage delete klant 2</h1>

<p>
    Op klantid gegevens zoekt uit de
    tabel klanten van de database garage
    zodat ze verwijderd kunnen worden.
</p>
<?php
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats, klantemail from klant where klantid = :klantid");

$klanten->execute(["klantid" => $klantid]);

echo "<table border='1px' style= 'font-family: Imprima, sans-serif'>";
echo "<tr>";
echo "<th style='color: red'>ID</th>";
echo "<th style='color: blue'>Naam</th>";
echo "<th style='color: green'>Adres</th>";
echo "<th style='color: black'>Postcode</th>";
echo "<th style='color: darkviolet'>Plaats</th>";
echo "<th style='color: orangered'>Plaats</th>";
echo "</tr>";
foreach ($klanten as $klant){
    echo "<tr style='text-align: center'>";
        echo "<td style='color: red'>" . $klant["klantid"] . "</td>";
        echo "<td style='color: blue'>" . $klant["klantnaam"] . "</td>";
        echo "<td style='color: green'>" . $klant["klantadres"] . "</td>";
        echo "<td style='color: black'>" . $klant["klantpostcode"] . "</td>";
        echo "<td style='color: darkviolet'>" . $klant["klantplaats"] . "</td>";
        echo "<td style='color: orangered'>" . $klant["klantemail"] . "</td>";
        echo "</tr>";
}

echo "</table> <br/>";

echo "<form action='gar-delete-klant3.php' method= 'post'>";

echo "<input type='hidden' name='klantidvak' value=$klantid>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<label class='check'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "<span class='checkmark'></span>";
echo "</label>";
echo "&emsp;&emsp;Verwijder deze klant. <br/><br/>";
echo "<input type='submit'>";
echo "</form>";

?>
</body>

</html>