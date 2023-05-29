<?php

require "./connect.php";

function printTable($table) {
    echo "<pre>";
    print_r($table);
    echo "</pre>";
}

function selectAll($table) {
    global $pdo;
    $sql = "SELECT * FROM $table";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}
