<?php

$link = mysqli_connect("localhost", "root", "", "basiccrud");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$voornaam = mysqli_real_escape_string($link, $_POST['voornaam']);
$achternaam = mysqli_real_escape_string($link, $_POST['achternaam']);


$sql = "INSERT INTO student (voornaam, achternaam) VALUES ('$voornaam', '$achternaam')";
$result = mysqli_query($link, $sql);

if(isset($_POST['submit'])){

    mysqli_close($link);
    header("Location: index.php");

}


?>

