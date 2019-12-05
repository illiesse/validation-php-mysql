<?php
if (!empty($_POST) && isset($_POST)) {
	include 'connection.php';

	$query = "DELETE FROM roles WHERE id=:role_id";
	$deleteRole = $dbConnection->prepare($query);

	$deleteRole->bindParam(':role_id', $_POST['role_id']);

	$deleteRole->execute();

	header('location: list.php');
}else{
	header('location: list.php');
}