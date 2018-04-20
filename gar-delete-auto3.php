<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-auto3.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage delete auto 3</h1>
<p>
    Op klantid gegevens zoeken uit de
    tabel auto van de database garage
    zodat ze verwijderd kunnen worden.
</p>
<?php
$klantid2 = $_POST["autokentekenvak"];
$verwijderen = $_POST["verwijdervak"];



if ($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare("delete from auto where autokenteken = :autokenteken");

    $sql->execute(["autokenteken" => $klantid2]);
    echo "De gegevens zijn verwijderd. <br/>";
}

else{
    echo "De gegevens zijn <bold>NIET</bold> verwijderd. <br/>";
}

echo "<br/><a href='index.html'>Terug naar het menu. </a>";

?>

</body>

</html>