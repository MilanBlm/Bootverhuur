<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigennaar login</title>
    <link rel="shortcut icon" href="boot.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/css.css"> 
</head>
<body>
<?php include 'header.php';?>
<?php
    // eigennaar login, haalt email en wachtwoord uit database
      $user = null;
      if(isset($_POST['login'])){
          $user = db_getUser($_POST['email'], $_POST['password']);
          if($user !== "no user found!"){
              header("location: ./eigennaar-orders.php");
              exit;
          }
      }
    ?>

    <div class="container-registreren">
        <h1>Login</h1>
                <form action="#" method="post">
                    <div class="inputRow-registreren">
                        <label for="email">Email</label>
                        <input type="email" name="email" required>
                        <br><br>

                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" required>
                        <br><br>
                    </div>
                        <input type="submit" value="Login" name="login">
                </form>
    </div>

    <?php include 'footer.php';?>
</body>
</html>