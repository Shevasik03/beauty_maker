<?php
require "../database/db.php";

$products = selectAll('infoproducts');

printTable($products);


