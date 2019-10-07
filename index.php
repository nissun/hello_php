<?php

require 'functions.php';
$pdo = connectToDatabase();

$statement = $pdo->prepare('SELECT * FROM students');
$statement->execute();
$students= $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($students);
require('index.view.php');
?>