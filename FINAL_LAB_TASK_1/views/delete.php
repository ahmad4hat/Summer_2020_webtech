<?php
require_once('../php/sessionController.php');
require_once('../service/userService.php');
?>
<?php
if (!isset($_GET["id"])) {
    header('location: user_list.php');
}

if (isset($_POST['confirm'])) {
    delete($_GET["id"]);
    header('location: user_list.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>

<body>
    <h1>Are you sure ? </h1>
    <form action="" method="post">
        <input type="submit" value="confirm" name="confirm">
    </form>

</body>

</html>