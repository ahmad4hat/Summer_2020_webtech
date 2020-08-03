<?php
print_r($_POST);



if(isset($_POST['submit'])){
    if($_POST['password']!==$_POST['confirmPassword']){
        echo "location: registration.php?error=passwordDeosNotMatch";
        header('location: registration.php?error=passwordDeosNotMatch');
    }

}else {
    header('location: registration.php');
}

?>