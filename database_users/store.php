<?php
if (!empty($_POST) && isset($_POST)) {
	include('connection.php');

	// var_dump($_POST);
	// die;

	//Requête SQL permettant d'insérer des données dans notre table users, en utlisant des données de substitution
	$query = "INSERT INTO users (name, email, password, phone_number, role_id) VALUES (:name, :email, :password, :phone_number, :role_id)";

	$createUser = $dbConnection->prepare($query);

	//Remplacement des données de substitution par les données de formulaire reçues
	$createUser->bindParam(":name", $_POST['name']);
	$createUser->bindParam(":email", $_POST['email']);
	$createUser->bindParam(":password", $_POST['password']);
	$createUser->bindParam(":phone_number", $_POST['phone_number']);
	$createUser->bindParam(":role_id", $_POST['role_id']);

	$createUser->execute();
	// var_dump($createUser); die();

	//Redirection une fois l'utilisateur inséré en DB
	header('Location: list.php');
}else{
	header('location: list.php');}
