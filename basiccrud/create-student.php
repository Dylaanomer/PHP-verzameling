<?php

$link = mysqli_connect("localhost", "root", "", "basiccrud");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$voornaam = mysqli_real_escape_string($link, $_POST['voornaam']);
$achternaam = mysqli_real_escape_string($link, $_POST['achternaam']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$telefoonummer = mysqli_real_escape_string($link, $_POST['telefoonummer']);
$straat = mysqli_real_escape_string($link, $_POST['straat']);
$Huisnummer = mysqli_real_escape_string($link, $_POST['Huisnummer']);
$woonplaats = mysqli_real_escape_string($link, $_POST['woonplaats']);
$postcode = mysqli_real_escape_string($link, $_POST['postcode']);
$klasID = mysqli_real_escape_string($link, $_POST['klasID']);


$sql = "INSERT INTO student (voornaam, achternaam, email, telefoonummer, straat, Huisnummer, woonplaats, postcode, klasID) VALUES ('$voornaam', '$achternaam', '$email', '$telefoonummer', '$straat', '$Huisnummer', '$woonplaats', '$postcode', '$klasID')";
$result = mysqli_query($link, $sql);

if(isset($_POST['submit'])){

    mysqli_close($link);
    header("Location: index.php");

}


?>

