<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if( empty($email) || empty($name) || empty($gender) || empty($day) || empty($month) || empty($year))
		{
			echo "something is empty and it is not your heart ";
		}

		else
		{
			setcookie('email', $email, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			header('location: dashboard.php');
			
		}

	}else{
		//header("location: login.html");
		echo "Not Set";
	}


?>