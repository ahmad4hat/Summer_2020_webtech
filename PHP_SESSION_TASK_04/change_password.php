<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['email']) || empty($_POST['password']) ){
            echo "empty values ";
        } else {
            if ($_POST['email']==$_COOKIE['email']){
                setcookie('password',$_POST['password'], time()+3600,'/');
                header('location: dashboard.php');
            }else {
                echo "record not found";
            }
        }

    }else {
        header('location: login.php');
    }

?>