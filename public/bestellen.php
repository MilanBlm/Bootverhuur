<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling voltooid</title>
    <link rel="shortcut icon" href="boot.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<?php include 'header.php';
  $result = db_getData("SELECT * FROM users");
  ?>

<?php
// hier word het doorgeven aan de database
$newUser = null;
if(isset($_POST['reseveren'])){
  $newUser = reseveerUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['hoeveelheid'], $_POST['Bootkeuze'], $_POST['datum'], $_POST['tijdstip'], $_POST['mobielnummer'],$_POST['opties']);  

}
?>

<div class="page">
  <h1 style="text-align: center;">bedankt, uw resevering is geplaats.</h1>
</div>

<?php include 'footer.php';?>
</body>
</html>