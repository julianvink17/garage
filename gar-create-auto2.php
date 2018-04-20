<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tabel
    auto in de database garage.
</p>
<?php
$autokenteken  = $_POST["autokentekenvak"];
$automerk   = $_POST["automerkvak"];
$autotype      = $_POST["autotypevak"];
$autokmstand   = $_POST["autokmstandvak"];
$klantid2       = $_POST["klantidvak"];
require_once "gar-connect.php";

$sql = $conn->prepare("INSERT INTO auto VALUES(:autokenteken, :automerk, :autotype, :autokmstand, :klantid2)");

$sql->execute([
    "autokenteken" => $autokenteken,
    "automerk"     => $automerk,
    "autotype"     => $autotype,
    "autokmstand"  => $autokmstand,
    "klantid2"      => $klantid2,
]);
echo "De auto is toegevoegd <br/><br/>";
echo "<a href='index.html'> Terug naar het menu </a>"
?>
</body>
</html>
