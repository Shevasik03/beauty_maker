<?php

require "./connect.php";

function selectAll($table) {
    global $pdo;
    $sql = "SELECT * FROM $table";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}
