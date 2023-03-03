<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boot-assortiment</title>
    <link rel="shortcut icon" href="boot.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>

<?php 
include 'header.php';
$assortiment = db_getData("SELECT * FROM boten");
?>
    <!-- boot-assortiment uit de database -->
    <?php
    if($assortiment -> rowCount() > 0){
        while($boot = $assortiment -> fetch(PDO::FETCH_ASSOC)){ ?>
              <div class="container3" style="border-top: 1px solid black;">
                <div>
                    <img src="<?php echo IMAGE_FOLDER . $boot['Image']; ?>" class="image1">
                </div>
                <div>
                        <p style="color: black; font-size: 30px; font-weight: bold;"><?php echo $boot['name']; ?></p>
                        <h4><?php echo $boot['price']; ?> per dagdeel.</h4>
                        <p style="margin-top: -15px; color: black; font-size: 20px;"><?php echo $boot['Tekst']; ?></p><br>
                        <a href="reseveren.php" class="reseveren"><span style="padding-top: 20px">reseveren</span></a>
                </div>            
    </div>  
<?php        
}
    }
?>
  

<?php include 'footer.php';?>
</body>
</html>