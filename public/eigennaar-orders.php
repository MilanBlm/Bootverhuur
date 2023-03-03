<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eigennaar orders</title>
    <link rel="shortcut icon" href="boot.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/css.css">  
</head>
<body>
  <?php include 'header.php';
  include('serverOOP.php');

    $result = db_getData("SELECT * FROM users");
    $date = date("Y-m-d");
        $newOrder = db_getData("SELECT * FROM users WHERE datum = '$date'");
    
$Bootkeuze = '';
$opties = '';
$hoeveelheid = '';
//$password = '';
$Datum = '';
$email = '';
$tijdstip = '';
$firstName = '';
$lastName = '';
$mobielnummer = '';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $user = new User();
    $user = $user->getUser($id);
    console_log(htmlspecialchars($user->notes));
    $Bootkeuze = $user->Bootkeuze;
    $opties = $user->opties;
    $hoeveelheid = $user->hoeveelheid;
//    $password = $user->password;

    $datum = $user->datum;
    $tijdstip = $user->tijdstip;
    $firstName = $user->firstName;
    $email = $user->email;
    $lastName = $user->lastName;
    $mobielnummer = $user->mobielnummer;


    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
            ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }
}
?>
  <div class="page">
    <table border= 4; style="margin-top: 10px; margin-bottom: 10px; margin: 0 auto;">
        <tr>
          <th>Type Boot</th>
          <th>Bijbehorende opties</th>
          <th>Aantal Personen</th>
          <th>Datum</th>
          <th>Dagdeel</th>
          <th>Voornaam</th>
          <th>Achternaam</th>
          <th>E-mail</th>
          <th>Mobiel nummer</th>
        </tr>
        
      <?php while($data = $newOrder->fetch(PDO::FETCH_ASSOC)) { ?>
        <!-- print data van boten in order tabel     -->
        <tr>
          <td><?php echo  $data['Bootkeuze']; ?></td>
          <td><?php echo $data["opties"]; ?></td>
          <td><?php echo $data['hoeveelheid']; ?></td>
          <td><?php echo $data['datum']; ?></td>
          <td><?php echo $data['tijdstip']; ?></td>
          <td><?php echo $data['firstName'] ; ?></td>
          <td><?php echo $data['lastName'] ; ?></td>
          <td><?php echo $data['email'] ; ?></td>
          <td><?php echo $data['mobielnummer'] ; ?></td>
          <td><a href="invoeg.php?edit=<?php echo $row['Klant_ID']; ?>" class="edit_btn" >Bewerk</a></td>
          <td><a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a> </td>
        </tr>
        </tr>
      <?php } ?>
    </table>     
  </div>         
<div>
<form method="post" action="serverOOP.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group">
            <label>Voornaam</label>
            <input type="text" name="firstName" value="<?php echo $firstName; ?>" required>
        </div>
        <div class="input-group">
            <label>Achternaam</label>
            <input type="text" name="lastName" value="<?php echo $lastName; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <label>Telefoon-Nummer</label>
            <input type="text" name="mobielnummer" value="<?php echo $mobielnummer; ?>">
        </div>
        <div class="input-group">
            <label>Datum</label>
            <input type="text" name="datum" value="<?php echo $datum; ?>" required>
        </div>
        <div class="input-group">
            <label>Postcode</label>
            <input type="text" name="pc" value="<?php echo $pc; ?>" required>
        </div>
        <div class="input-group">
            <label>Straat</label>
            <input type="text" name="street" value="<?php echo $street; ?>" required>
        </div>
        <div class="input-group">
            <label>Huisnummer</label>
            <input type="number" name="houseNr" value="<?php echo $houseNr; ?>" required>
        </div>
        <div class="input-group">
            <label>Notities</label>
            <textarea name="notes" class="comment"><?php echo $notes; ?></textarea>
        </div>
        <div class="input-group">
            <?php if ($update == true): ?>
                <button class="btn2" type="submit" name="update">update</button>
            <?php else: ?>
                <button class="btn" type="submit" name="save" >Save</button>
            <?php endif ?>
        </div>
    </form>
</div>
</div>

<?php include 'footer.php';?>
</body>
</html>