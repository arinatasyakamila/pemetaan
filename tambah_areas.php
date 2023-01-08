<?php

require_once("db.php");

$name = strip_tags($_POST['name']);
$geolocations = strip_tags($_POST['geolocations']);
$conn = new connectToDB();
$conn->addAreas($name, $geolocations);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Tambah data</title>
 </head>
 <body>
  
  <h1><a rel="stylesheet" href="index.php">Data sudah ditambahkan</a></h1>

 </body>
</html>