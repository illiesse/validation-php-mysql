<?php
include ('../templates/header.php');
include ('../templates/nav_roles.php');
include('connection.php');

//Create a query that shows all the users from our 'users' table
$query = 'SELECT * FROM roles';

//Prepare this query before executing
$preparedQuery = $dbConnection->prepare($query);

//Executing the query
$preparedQuery->execute();

//Permet de récupérer le résultat de la requête exécutée précedemment et de la stocker dans une variable $users
$roles = $preparedQuery->fetchAll();

// var_dump($_POST);

?>
<table border="1">
	<tr>
		<th scope="col">Fonction : </th>
		<th scope="col">Modifier</th>
		<th scope="col">Supprimer</th>
	</tr>
		<?php
		foreach ($roles as $role) {
		?>
	<tr>
		<td><?php echo "$role[name]";?></td>
<!-- Editer  -->
		<td>
			<form action="/database_roles/edit.php" method="POST">
				<input type="hidden" name="role_id" value="<?php echo $role['id'];?>">
				<input type="submit" value="Modifier">
			</form>
		</td>
<!-- Supprimer -->
		<td>
			<form action="/database_roles/delete.php" method="POST">
				<input type="hidden" name="role_id" value="<?php echo $role['id'];?>">
				<input type="submit" value="X">
			</form>
		</td>
	</tr>
<?php
		}
?>
</table>