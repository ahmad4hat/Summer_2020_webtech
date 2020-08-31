<?php

if (isset($_GET['error'])) {
	if ($_GET['error'] == 'dberror') {
		echo "something wrong ...please try again.";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Signup page</title>
</head>

<body>
	<form action="../php/signupController.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" id="submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>


	<script>
		const xhttp = new XMLHttpRequest();
		xhttp.open('POST', 'php/signupController.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		const data = new FormData();
		data.append('username', document.querySelector('#username').value);
		data.append('password', document.querySelector('#password').value);
		data.append('email', document.querySelector('#email').value);
		xhttp.send(data);
		xhttp.onreadystatechange = function() {
			if (this.readyState === 4 && this.status === 200) {
				console.log(this.responseText)
			}
		}
	</script>
</body>

</html>