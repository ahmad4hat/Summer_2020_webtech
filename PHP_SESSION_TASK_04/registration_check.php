
<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		echo $_POST;

        $name 		= $_POST['name'];
        $username   = $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		if(empty($name ) || empty($username) || empty($email) || empty($password) ){
			echo "null submission found!";
		}else{
			$_SESSION['name'] 		= $uname;
			$_SESSION['password'] 	= md5($password); // md5 is bad , just doing this for implementation
            $_SESSION['email'] 		= $email;
            $_SESSION['username'] = $username;
            
            header ("location: login.php");

			echo $_SESSION['username'];
			echo "done!";
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}




?>