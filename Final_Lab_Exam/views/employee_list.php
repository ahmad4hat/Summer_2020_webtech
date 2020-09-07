<?php
// require_once('../php/sessionController.php');
require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>employee List</title>
</head>

<body>


	<h4>Add empolyee</h4>
	<h1>Employee List page</h1>


	<?php
	$users = getAllUser();
	?>

	<div id="table">
		<table border=1>
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Name</td>
				<td>Company Name</td>
				<td>Contact no</td>
				<td>password</td>
				<td>type</td>
				<td>action</td>
			</tr>

			<?php for ($i = 0; $i != count($users); $i++) { ?>
				<tr>
					<td><?= $users[$i]['id'] ?></td>
					<td><?= $users[$i]['username'] ?></td>
					<td><?= $users[$i]['name'] ?> </td>
					<td><?= $users[$i]['company_name'] ?></td>
					<td><?= $users[$i]['contact_no'] ?></td>
					<td><?= $users[$i]['password'] ?></td>
					<td><?= $users[$i]['type'] ?></td>

					<td>
						<a href="edit.php?id=<?= $users[$i]['id'] ?>"> Edit</a> |
						<a href="delete.php?id=<?= $users[$i]['id'] ?>"> Delete</a>

					</td>
				</tr>
			<?php } ?>

		</table>
	</div>

</body>

</html>