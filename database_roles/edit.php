<?php

if (!empty($_POST) && isset($_POST)) {

	include '../templates/header.php';
	include ('../templates/nav_roles.php');
	include 'connection.php';

	$query = "SELECT * FROM roles WHERE id = :role_id";

	$editRole = $dbConnection->prepare($query);

	$editRole->bindParam(":role_id", $_POST['role_id']);

	$editRole->execute();

	$role = $editRole->fetch();
	var_dump($role);
?>
	<h1>Modification de la fonction</h1>
	<form action="update.php" method="POST">
		<div>
			<label for="fonction">Fonction : </label>
			<input type="text" name="fonction" required value="<?php echo $role['name']?>">
		</div>
		<input type="hidden" name="role_id" value="<?php echo $role['id'];?>">

		<input type="submit" value="Modifier!">
	</form>

<?php
// var_dump($_POST); die();
}else{
	header('location: list.php');}
