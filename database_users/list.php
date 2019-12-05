<?php
include ('../templates/header.php');
include ('../templates/nav_users.php');
include('connection.php');

//Create a query that shows all the users from our 'users' table
$query = 'SELECT * FROM users';

//Prepare this query before executing
$preparedQuery = $dbConnection->prepare($query);

//Executing the query
$preparedQuery->execute();

//Permet de récupérer le résultat de la requête exécutée précedemment et de la stocker dans une variable $users
$users = $preparedQuery->fetchAll();

// var_dump($_POST);

?>
<table border="1">
	<tr>
		<th scope="col">Nom de l'utilisateur : </th>
		<th scope="col">Email : </th>
		<th scope="col">Mot de passe : </th>
		<th scope="col">Numéro de téléphone : </th>
		<th scope="col">Fonction : </th>
		<th scope="col">Modifier</th>
		<th scope="col">Supprimer</th>
	</tr>
		<?php
		foreach ($users as $user) {
			$userRole=$user['role_id'];
			$explainRoleId="SELECT name FROM roles WHERE id = $userRole";
			$preparedExplainRoleId = $dbConnection->prepare($explainRoleId);
			$preparedExplainRoleId->execute();
			$role=$preparedExplainRoleId->fetch();
			// var_dump($user);
		?>
	<tr>
		<td><?php echo "$user[name]";?></td>
		<td><?php echo "$user[email]";?></td>
		<td><?php echo "$user[password]";?></td>
		<td><?php echo "$user[phone_number]";?></td>
		<td><?php echo "$role[name] <br>";?></td>
<!-- Editer données formulaire -->
		<td>
			<form action="edit.php" method="POST">
				<input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
				<input type="submit" value="Modifier">
			</form>
		</td>
<!-- Supprimer un movie -->
		<td>
			<form action="delete.php" method="POST">
				<input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
				<input type="submit" value="X">
			</form>
		</td>
	</tr>
<?php
		}
?>
</table>