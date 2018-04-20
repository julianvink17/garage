<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-update-auto2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage update auto 2</h1>
<p>
    Dit formulier wordt gebruikt om autogegevens te wijzigen
    in de tabel auto van de database garage.
</p>
<?php
$autokentekenvak = $_POST["autokentekenvak"];

require_once "gar-connect.php";

$autokenteken = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid2 FROM auto WHERE autokenteken = :autokenteken");


$autokenteken->execute(["autokenteken" => $autokentekenvak]);

echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($autokenteken as $auto){
    echo " Autokenteken: <br/><input type='text' ";
    echo "name='autokentekenvak'";
    echo " value=' " . $auto["autokenteken"] . " '><br/> <br/> ";

    echo " automerk: <br/><input type='text' ";
    echo " name = 'automerkvak' ";
    echo " value=' " . $auto["automerk"] . " '> <br/><br/> ";

    echo " Autotype: <br/><input type='text' ";
    echo " name = 'autotypevak' ";
    echo " value=' " . $auto["autotype"] . " '> <br/><br/> ";

    echo " Autokmstand: <br/><input type='text' ";
    echo " name = 'autokmstandvak' ";
    echo " value=' " . $auto["autokmstand"] . " '> <br/><br/> ";

    echo " Klantid: <br/><input type='text' ";
    echo " name = 'klantidvak' ";
    echo " value=' " . $auto["klantid2"] . " '> <br/><br/> ";

}
echo "<input type='submit'>";
echo "</form>";


?>
</body>

</html>
