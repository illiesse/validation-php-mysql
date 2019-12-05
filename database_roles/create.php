<?php
include ('../templates/header.php');
include ('../templates/nav_roles.php');
?>

<form action="store.php" method="POST">
	<div>
		<label for="fonction">Fonction : </label>
		<input type="text" name="fonction" required>
	</div>

	<input type="submit" value="Créer!">
</form>
