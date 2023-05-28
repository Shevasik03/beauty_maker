<?php

include "./connect.php";

$sql = "SELECT * From infoproducts";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetchAll();

print_r($query);