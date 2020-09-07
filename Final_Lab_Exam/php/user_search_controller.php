<?php
require_once('../service/userService.php');
// $search = "";



if (isset($_POST['search'])) {
    $user = searchUser($_REQUEST['search']);
    print_r($user);
}
