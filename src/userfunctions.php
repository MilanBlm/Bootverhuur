<?php
function reseveerUser($firstName, $lastName, $email, $hoeveelheid, $Bootkeuze, $datum, $tijdstip, $mobielnummer, $opties) {
    $result = db_insertData("INSERT INTO users (firstName, lastName, email, hoeveelheid, Bootkeuze, datum, tijdstip, mobielnummer, opties) 
    VALUES ('$firstName', '$lastName', '$email', '$hoeveelheid', '$Bootkeuze', '$datum', '$tijdstip', '$mobielnummer', '$opties')");
    return $result;
}
?>
