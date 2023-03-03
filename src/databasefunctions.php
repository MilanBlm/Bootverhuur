<?php
// connect met database
function db_connect()
{
    try {
        $dbString = "mysql:host=".DB_HOST.";dbname=".DB_NAME;

        $db = new PDO($dbString, DB_USER, DB_PASSWORD);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
      } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
      }
}
    // het maken van de data
function db_getData($query)
{
    $DB = db_connect();
    $result = $DB->query($query);
    $DB = null;
    return $result;
    
}
    // het aanmaken van de data
function db_insertData($query)
{
    $DB = db_connect();
    $result = $DB->prepare($query);
    $result->execute();
    if ($result === TRUE) 
    {
       // Return row id for succes
        return mysqli_insert_id($mysqli);
    } 
    else 
    {
        $result = "Error: " . $query . "<br>" . implode(" | ",$DB->errorInfo());
     }
    $DB = null;
    return $result;
}
// login eigennaar
function db_getUser($email, $password){
    $user = db_getData("SELECT* FROM eigennaar WHERE Mail = '$email' AND Wachtwoord = '$password'");

    if($user->rowCount() > 0){
        return $user;
    } else {
        return "no user found!";
    }
}
?>
