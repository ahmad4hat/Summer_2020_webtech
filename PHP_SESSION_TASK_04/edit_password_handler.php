<?php
if(isset($_POST['submit'])){
	if(!empty($_POST['newPassword']) && !empty($_POST['newPassword']) && !empty($_POST['confirmPassword']))
	{
		if($_POST['newPassword']==$_POST['confirmPassword'])
		{
		
			if($_POST["currentPassword"]==$_COOKIE["password"])
			{
				setcookie('password', $_POST['newPassword'], time()+3600, '/');
				header('location: dashboard.php');
            }
            else {
                echo "current password is wrong";
            }
		}else {
            echo " confrim password does not match";
        }
	}else{
        echo "submit and stuff";
    }
}else {
    echo "submit and stuff";
    header('location:edit_password.php');
}
?>