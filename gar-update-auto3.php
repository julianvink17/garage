<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage update auto 3</h1>
<p>
    Autogegevens wijzigen in de tabel
    auto van de database garage.
</p>
<?php
$autokenteken  = $_POST["autokentekenvak"];
$automerk   = $_POST["automerkvak"];
$autotype      = $_POST["autotypevak"];
$autokmstand      = $_POST["autokmstandvak"];
$klantid2       = $_POST["klantidvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("UPDATE auto SET autokenteken = :autokenteken, automerk = :automerk, autotype = :autotype, autokmstand = :autokmstand, klantid2 = :klantid2 WHERE autokenteken = :autokenteken");

$sql->execute([
    "autokenteken" => $autokenteken,
    "automerk"     => $automerk,
    "autotype"     => $autotype,
    "autokmstand"  => $autokmstand,
    "klantid2"      => $klantid2,
]);
echo "De autogegevens is gewijzigd <br/>";
echo "<a href='index.html'> Terug naar het menu </a>"

?>


</body>
</html>