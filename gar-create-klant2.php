<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>garage create klant 2</h1>
<p>
    Een klant toevoegen aan de tabel
    klant in de database garage.
</p>
<?php
$klantid        = NULL;
$klantnaam      = $_POST["klantnaamvak"];
$klantadres     = $_POST["klantadresvak"];
$klantpostcode  = $_POST["klantpostcodevak"];
$klantplaats    = $_POST["klantplaatsvak"];
$klantemail    = $_POST["klantemailvak"];
require_once "gar-connect.php";

$sql = $conn->prepare("insert into klant values(:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats, :klantemail)");

$sql->execute([
    "klantid"         => $klantid,
    "klantnaam"       => $klantnaam,
    "klantadres"      => $klantadres,
    "klantpostcode"   => $klantpostcode,
    "klantplaats"     => $klantplaats,
    "klantemail"     => $klantemail,
            ]);
echo "De klant is toegevoegd <br/><br/>";
echo "<a href='index.html'> Terug naar het menu </a>"
?>
</body>
</html>
