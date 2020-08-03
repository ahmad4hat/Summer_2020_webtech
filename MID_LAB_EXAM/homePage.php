<?php 
    
    if(!isset($_COOKIE['status'])){
        header('location: registration.php?error=youAreNotLoggedIn');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php print_r($_COOKIE)?>

    
</body>
</html>