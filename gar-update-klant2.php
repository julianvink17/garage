<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-update-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage update klant 2</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens te wijzigen
    on de tabel klant van de database garage.
</p>
<?php
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("select klantid, klantnaam, klantadres, klantpostcode, klantplaats, klantemail from klant where klantid = :klantid");


$klanten->execute(["klantid" => $klantid]);

echo "<form action='gar-update-klant3.php' method='post'>";
foreach ($klanten as $klant){
    echo " klantid: <br/>" . $klant["klantid"];
    echo " <input type='hidden' name='klantidvak'";
    echo " value=' " . $klant["klantid"] . " '><br/> <br/> ";

    echo " klantnaam: <br/><input type='text' ";
    echo " name = 'klantnaamvak' ";
    echo " value=' " . $klant["klantnaam"] . " '> <br/><br/> ";

    echo " klantadres: <br/><input type='text' ";
    echo " name = 'klantadresvak' ";
    echo " value=' " . $klant["klantadres"] . " '> <br/><br/> ";

    echo " klantpostcode: <br/><input type='text' ";
    echo " name = 'klantpostcodevak' ";
    echo " value=' " . $klant["klantpostcode"] . " '> <br/><br/> ";

    echo " klantplaats: <br/><input type='text' ";
    echo " name = 'klantplaatsvak' ";
    echo " value=' " . $klant["klantplaats"] . " '> <br/><br/> ";

    echo " klantemail: <br/><input type='text' ";
    echo " name = 'klantemailvak' ";
    echo " value=' " . $klant["klantemail"] . " '> <br/><br/> ";

}
echo "<input type='submit'>";
echo "</form>";


?>
</body>

</html>
