<?php
include ('../templates/header.php');
include ('../templates/nav_users.php');
?>

<form action="store.php" method="POST">
	<div>
		<label for="name">Nom de l'utilisateur : </label>
		<input type="text" name="name" required>
	</div>
	<div>
		<label for="email">Email : </label>
		<input type="email" name="email" required placeholder="ex: xxx@xxx.xx">
	</div>

	<div>
		<label for="password">Mot de passe : </label>
		<input type="password" name="password" required>
	</div>

	<div>
		<label for="phone_number">Numéro de téléphone : </label>
		<input type="tel" name="phone_number" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
       required placeholder="ex: 00-00-00-00-00">
	</div>

	<div>
		<label for="role_id">Fonction : </label>
		<input type="text" name="role_id" required>
	</div>

	<input type="submit" value="Créer!">
</form>
