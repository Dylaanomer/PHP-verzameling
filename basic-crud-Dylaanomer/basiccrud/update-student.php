<meta http-equiv="refresh" content="0; URL=index.php"/>
<?php
include "connectdb.php";

$voornaam = empty($_POST["voornaam"]) ? null : $_POST["voornaam"];
$achternaam = empty($_POST["achternaam"]) ? null : $_POST["achternaam"];
$id = empty($_POST["id"]) ? null : $_POST["id"];



$sql = "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam WHERE id = :id";
$params = array(
    ":voornaam" => $voornaam,
    ":achternaam" => $achternaam,
    ":id" => $id
);
$sth = $db->prepare($sql);
$sth->execute($params);