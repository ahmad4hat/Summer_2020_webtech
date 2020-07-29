
<html>
<head>
	<title>dashBoard</title>
</head>
<body>
<table>
	<tr>
		<td colspan="2">
		</td>
	</tr>
	<tr>
		<td>
			<a href="dashboard.php">Dash Board</a><br>
			<a href="view_profile.php">View Profile</a><br>
			<a href="edit_profile.php">Edit Profile</a><br>
			<a href="change_profile_picture.php">Change Profile Picture</a><br>
			<a href="edit_password.php">Edit Password</a><br>
			<a href="logout.php">Log Out</a><br>
		</td>
		<td>
			<pre class="tab"> Welcome    <?php echo $_COOKIE['uname']?>  </pre>
		</td>
	</tr>
</table>
</body>
</html>