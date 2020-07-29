<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form action="edit_profile_handler.php" method="post">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value=<?php echo '"'.$_COOKIE['name'].'"'?>></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value=<?php echo '"'.$_COOKIE['email'].'"'?>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend> 
						<input name="gender" type="radio" value="Male" <?php 
						if($_COOKIE['gender']=="Male")
						{
							echo "checked=";
						}
						?>   
						>Male
						<input name="gender" type="radio" value="Female"<?php 
						if($_COOKIE['gender']=="Female")
						{
							echo "checked=";
						}
						?>  >Female
						<input name="gender" type="radio" value="Other" <?php 
						if($_COOKIE['gender']=="Other")
						{
							echo "checked=";
						}
						?>>Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="day" value=<?php echo '"'.$_COOKIE['day'].'"'?>/>
						<input type="text" size="2" name="month" value=<?php echo '"'.$_COOKIE['month'].'"'?>/>/
						<input type="text" size="4" name="year" value=<?php echo '"'.$_COOKIE['year'].'"'?>/>
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="submit" name="submit">
	</form>
</fieldset>