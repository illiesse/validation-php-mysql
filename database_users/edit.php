<?php

if (!empty($_POST) && isset($_POST)) {

	include '../templates/header.php';
	include ('../templates/nav_users.php');
	include 'connection.php';

	$query = "SELECT * FROM users WHERE id = :user_id";

	$editUser = $dbConnection->prepare($query);

	$editUser->bindParam(":user_id", $_POST['user_id']);

	$editUser->execute();

	$user = $editUser->fetch();

	// var_dump($user);
?>
	<h1>Modification des données de l'utilisateur</h1>
	<form action="update.php" method="POST">
		<div>
			<label for="name">Nom de l'utilisateur : </label>
			<input type="text" name="name" required value="<?php echo $user['name']?>">
		</div>
		<div>
			<label for="email">Email : </label>
			<input type="email" name="email" required value="<?php echo $user['email']?>">
		</div>
		<div>
			<label for="password">Mot de passe : </label>
			<input type="password" name="password" required value="<?php echo $user['password']?>">
		</div>
		<div>
			<label for="phone_number">Numéro de téléphone : </label>
			<input type="tel" name="phone_number" required value="<?php echo $user['phone_number']?>">
		</div>
		<div>
			<label for="role">Fonction : </label>
			<input type="text" name="role_id" required value="<?php echo $user['role_id']?>">
		</div>
		<input type="hidden" name="user_id" value="<?php echo $user['id'];?>">

		<input type="submit" value="Modifier!">
	</form>

<?php
}else{
	header('location: list.php');}
