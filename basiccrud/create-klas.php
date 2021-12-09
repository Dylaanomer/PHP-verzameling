<?php

$link = mysqli_connect("localhost", "root", "", "basiccrud");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$code = mysqli_real_escape_string($link, $_POST['code']);
$vesteging = mysqli_real_escape_string($link, $_POST['vesteging']);
$sectie = mysqli_real_escape_string($link, $_POST['sectie']);
$cohort = mysqli_real_escape_string($link, $_POST['cohort']);



$sql = "INSERT INTO klas (code, vesteging, sectie, cohort) VALUES ('$code', '$vesteging', '$sectie', '$cohort')";
$result = mysqli_query($link, $sql);

if(isset($_POST['submit'])){

    mysqli_close($link);
    header("Location: index.php");

}


?>

