<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-klant1.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage delete klant 1</h1>
<p>
    Dit formulier zoekt een klant op uit
    de tabel klanten van database garage
    om hem te kunnen verwijderen.
</p>
<form action="gar-delete-klant2.php" method="post">
    Welk klantid wilt u verwijderen?
    <input type="text" name="klantidvak" placeholder="KlantID"> <br/>
    <input type="submit">
</form>
</body>

</html>