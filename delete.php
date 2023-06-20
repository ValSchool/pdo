<?php
echo 'weg ermee ';
$id = $_GET["id"];
echo $id;

$winkel = new PDO("mysql:host=localhost;port=3306;dbname=store", "root", "database12345");

$statement = $winkel -> prepare ("delete from producten where product_id = :id");
$statement -> execute(array( ":id" => $id));
?>