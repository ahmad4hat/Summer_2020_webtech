<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $_COOKIE['uname']?></td>
				<td rowspan="7" align="center">
					<img width="128" src="./images/user.png"/>
                    <br/>
                    <!-- <a href="ChangeProfilePicture.php">Change</a> -->
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $_COOKIE['email']?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $_COOKIE['gender']?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?php echo $_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year']?></td>
			</tr>
		</table>	
        <hr/>
        <a href="EditProfile.php">Edit Profile</a>	
	</form>
</fieldset>