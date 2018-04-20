<!DOCTYPE html>
<html lang="en">
<head>
    <title>gar-delete-auto1.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Garage delete auto 1</h1>
<p>
    Dit formulier zoekt een auto op uit
    de tabel auto van database garage
    om hem te kunnen verwijderen.
</p>
<form action="gar-delete-auto2.php" method="post">
    Welk autokenteken wilt u verwijderen?
    <input type="text" name="autokentekenvak" placeholder="Autokenteken"> <br/>
    <input type="submit">
</form>
</body>

</html>