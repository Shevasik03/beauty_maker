<?php
require "../database/db.php";

$products = selectAll('products');

printTable($products);
?>

