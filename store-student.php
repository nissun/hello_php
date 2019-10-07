<?php
require 'functions.php';
$pdo = connectToDatabase();

if(isset($_POST['submit'])){
	$statement = $pdo->prepare('INSERT INTO students (first_name, last_name,age, gender) VALUES (:first_name, :last_name, :age, :gender)');
	$statement->execute([
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'age' => $_POST['age'],
		'gender' => $_POST['gender'],
	]);
}

header('Location:index.php');
?>