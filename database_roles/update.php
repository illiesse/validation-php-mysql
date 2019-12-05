<?php
if (!empty($_POST) && isset($_POST)) {
	include 'connection.php';

	$query = "UPDATE roles
	SET 
		name = :name
	WHERE
		id = :role_id";

	$updateUser = $dbConnection->prepare($query);

	$updateUser->bindParam(':role_id', $_POST['role_id']);
	$updateUser->bindParam(':name', $_POST['fonction']);

	$updateUser->execute();

	header('location: list.php');
}else{
	header('location: list.php');
}