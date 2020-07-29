
<?php 
    // echo $_COOKIE['uname'];
    // echo $_COOKIE['name'];
    // print_r($_COOKIE);
?>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="login_check.php" method="POST">
        <table>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" name="submit" value="Submit">        
		<a href="forgot_password.php">Forgot Password?</a>
    </form>
</fieldset>