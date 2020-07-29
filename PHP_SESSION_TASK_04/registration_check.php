
<?php
	
	session_start();
	setcookie("TestCookie", 'hello', time()+3600);
	
	if(isset($_POST['submit'])){

		print_r($_POST);

        $name = $_POST['name'];
		$uname = $_POST['userName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		

		if(empty($name ) || empty($username) || empty($email) || empty($password) ){
			echo "null submission found!";
		}else{
			
			if($confirmPassword==$password)
			{
				print_r($_POST);
				setcookie('username',$uname, time()+3600,'/');
				setcookie('uname',$name, time()+3600,'/');
				setcookie('password',$password, time()+3600,'/');
				setcookie('email',$email, time()+3600,'/');
				setcookie('gender',$gender, time()+3600,'/');
				setcookie('day',$day, time()+3600,'/');
				setcookie('month',$month, time()+3600,'/');
				setcookie('year',$year, time()+3600,'/');
				header('location: login.php');

			}
			
			
			// session code 
			// $_SESSION['name'] 		= $uname;
			// $_SESSION['password'] 	= md5($password); // md5 is bad , just doing this for implementation
            // $_SESSION['email'] 		= $email;
            // $_SESSION['username'] = $username;
            
            // header ("location: login.php");

			// echo $_SESSION['username'];
			// echo "done!";
		}	

	}else{
		//echo "invalid request";
		//header('location: login.php');
	}




?>