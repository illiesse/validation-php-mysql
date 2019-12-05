<?php
if (!empty($_POST) && isset($_POST)) {
	include 'connection.php';

	// var_dump($_POST);
	// die();

	$query = "UPDATE users
	SET 
		name = :name,
		email = :email,
		password = :password,
		phone_number = :phone_number,
		role_id = :role_id
	WHERE
		id = :user_id";

	$updateUser = $dbConnection->prepare($query);

	$updateUser->bindParam(':user_id', $_POST['user_id']);
	$updateUser->bindParam(':name', $_POST['name']);
	$updateUser->bindParam(':email', $_POST['email']);
	$updateUser->bindParam(':password', $_POST['password']);
	$updateUser->bindParam(':phone_number', $_POST['phone_number']);
	$updateUser->bindParam(':role_id', $_POST['role_id']);

	$updateUser->execute();

	header('location: list.php');
}else{
	header('location: list.php');
}