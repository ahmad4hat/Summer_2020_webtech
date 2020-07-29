<?php 
if(isset($_POST['submit'])){
    $uname 		= $_POST['uname'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password)){
			echo "submission can not be empty";

		}else if( isset($_COOKIE['uname']) && isset($_COOKIE['password'])){
			
			if($uname == $_COOKIE['uname'] && $password == $_COOKIE['password']){
				setcookie('status', "OK", time()+3600, '/');
				header('location: dashboard.php');


			}else{
				echo "Invalid username/password";
			}
			
		}else{
            echo "Record not found!";
            header('location: registration.php?error="record_not_found"');
		}
}
else {
    header('location: login.php');
}

?>