<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reseveren</title>
    <link rel="short" href="">
    <link rel="shortcut icon" href="boot.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/css.css">
  </head>
  <body>
  <?php include 'header.php';?>
  <?php
    $boten = db_getData("SELECT * FROM boten");
    $dag = db_getData("SELECT * FROM dagdeel");
    $opties = db_getData("SELECT * FROM opties");
    
  ?>
  <div class="page1">
<div class="container-registreren">
<div class="container">

    <div class="inputRow-registreren">
      <h1>Boot reseveren</h1>
      <form action="bestellen.php" method="post" required>
    </div>
  <!-- select keuze -->
    <div class="inputRow-registreren">
      <label for="Bootkeuze">Kies je boot</label>
      <select name="Bootkeuze" class="colorbox">
    </div>
  <!-- printen in select -->
    <?php while($boot = $boten->fetch(PDO::FETCH_ASSOC)){  ?>
      <option value="<?php echo $boot["name"];?>"><?php echo $boot["name"]; ?></option>
    <?php } ?>
  </select>
  </div>

  <div class="inputRow-registreren">
    <label for="">Extra Opties</label>
    <select name="opties" id="input" class="colorbox">

      <?php while($optie = $opties->fetch(PDO::FETCH_ASSOC)){  ?>
          <option value="<?php echo $optie["opties"];?>"><?php echo $optie["opties"]; ?></option>
          <?php } ?> 
      </select>
    </div>
  

  <div class="inputRow-registreren">
    <label for="hoeveelheid">Personen</label>
    <input type="number" name ="hoeveelheid" class="colorbox" required>
  </div>
  </div>

    <form action="bestellen.php" method="post">
        
    <div class="inputRow-registreren">
      <label for="firstName">Voornaam</label>
      <input type="text" name="firstName" class="colorbox" required>
    </div>

      <div class="inputRow-registreren">
        <label for="lastName">Achternaam</label>
        <input type="text" name="lastName" class="colorbox" required>
      </div>

    <div class="inputRow-registreren">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="colorbox" required>
    </div>

    <div class="inputRow-registreren">
      <label for="mobielnummer">Mobiel nummer</label>
      <input type="mobielnummer" name="mobielnummer" class="colorbox" required>
    </div>

    <div class="inputRow-registreren">
      <label for="datum">Datum</label>
      <input type="date" name="datum" class="colorbox" required>
    </div>
    <!-- kiezen dagdeel -->
  <div class="inputRow-registreren">
      <label for="tijdstip">Kies je dagdeel</label>
      <select name="tijdstip" class="colorbox">

      <?php while($dagdeel = $dag->fetch(PDO::FETCH_ASSOC)){  ?>
        <option value="<?php echo $dagdeel["dagdeel"];?>"><?php echo $dagdeel["dagdeel"]; ?></option>
        <?php } ?>

  </select>
  </div>
  <input type="submit" name="reseveren" value="reseveren" style="width: 75px; height: 30px; margin-left: 105px;">
  </form>
  </div>
  </div>
  </div>
  <?php include 'footer.php';?>
</body>
</html>