<?php
if (!empty($_POST) && isset($_POST)) {
	include('connection.php');

	$query = "INSERT INTO roles (name) VALUES (:name)";

	$createRole = $dbConnection->prepare($query);

	$createRole->bindParam(":name", $_POST['fonction']);

	$createRole->execute();

	header('Location: list.php');
}else{
	header('location: list.php');}
