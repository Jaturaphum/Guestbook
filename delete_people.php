<?php
require("connect_db.php");

$id=$_GET["id"];


$sql="DELETE FROM guestbook WHERE id=$id";
$conn->query($sql);
header( "location: list_people.php" );
?>