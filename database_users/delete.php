<?php
if (!empty($_POST) && isset($_POST)) {
	include 'connection.php';

	// var_dump($_POST['user_id']);

	//Requête SQL qui permet supprimer une donnée ds la table users dt l'id == à l'id récupéré ds l'input hidden
	$query = "DELETE FROM users WHERE id=:user_id";
	$deleteUser = $dbConnection->prepare($query);

	//Liaison de la donnée reçue en POST avec la donnée de substitution
	$deleteUser->bindParam(':user_id', $_POST['user_id']);

	$deleteUser->execute();

	header('location: list.php');
}else{
	header('location: list.php');
}