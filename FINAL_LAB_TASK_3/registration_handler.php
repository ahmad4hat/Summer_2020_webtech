<?php
print_r($_POST);




if (isset($_POST['submit'])) {




    if (empty($_POST['name']) || empty($_POST['password']) || empty($_POST['id']) || empty($_POST['confirmPassword']) || empty($_POST['email']) || empty($_POST['id'])) {
        echo "location: registration.php?error=passwordDeosNotMatch";
        // header('location: registration.php?error=thereAreEmptyFields');
    }

    if ($_POST['password'] !== $_POST['confirmPassword']) {
        echo "location: registration.php?error=passwordDeosNotMatch";
        // header('location: registration.php?error=passwordDeosNotMatch');
    }

    //$data = trim($_POST['id']) . '|' . $_POST['password'] . '|'.  $_POST['name'] . '|'. $_POST['email'] . '|'. $_POST['userType'] ;


    $connection = mysqli_connect('127.0.0.1:3306', 'root', '', 'test');

    $sql = "INSERT INTO `users` (`id`, `password`, `name`, `email`, `userType`) VALUES ('" . trim($_POST['id']) . "', '" . $_POST['password'] . "', '" . $_POST['name'] . "', '" . $_POST['name'] . "', '" . $_POST['userType'] . "')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // header('location: registration.php?error=sqlError');
        exit();
    }




    // $fp = fopen('data.txt', 'a');//opens file in append mode  
    // fwrite($fp, $data.PHP_EOL);  
    // fclose($fp);

    setcookie('status', "OK", time() + 3600, '/');
    setcookie('userType', $_POST['userType'], time() + 3600, '/');
    setCookie('id', trim($_POST['id']), time() + 3600, '/');
    header('location: homePage.php');
} else {
    // header('location: registration.php');
}
