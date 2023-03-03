<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php 
    include '../config/config.php';
    include '../config/database.php';
    include '../src/databasefunctions.php';
    include '../src/userfunctions.php'; ?>
    <!-- Toevoegen van header balk -->
    <div class="container1">
        <li class="li links"><a class="a" href="index.php">Home</a></li>
        <li class="li"><a class="a" href="boot-assortiment.php">Boot-assortiment</a></li>
        <li class="li"><a class="a" href="reseveren.php">Reseveren</a></li>
    </div>
</body>
</html>