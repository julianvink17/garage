<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-klant3.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage delete klant 3</h1>
<p>
    Op klantid gegevens zoeken uit de
    tabel klanten van de database garage
    zodat ze verwijderd kunnen worden.
</p>
<?php
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];



if ($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare("delete from klant where klantid = :klantid");

    $sql->execute(["klantid" => $klantid]);
    echo "De gegevens zijn verwijderd. <br/>";
}

else{
    echo "De gegevens zijn <bold>NIET</bold> verwijderd. <br/>";
}

echo "<br/><a href='index.html'>Terug naar het menu. </a>";

?>

</body>

</html>