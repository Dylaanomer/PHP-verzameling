<meta http-equiv="refresh" content="0; URL=index.php"/>

<?php
include "connectdb.php";


$id = empty($_GET["id"]) ? null : $_GET["id"];

$sql = "DELETE FROM student WHERE id = :id";
$params = array(
    ":id" => $id
);
$sth = $db->prepare($sql);
$sth->execute($params);



