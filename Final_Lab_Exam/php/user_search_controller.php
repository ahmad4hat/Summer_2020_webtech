<?php
require_once('../service/userService.php');
// $search = "";
if (isset($_REQUEST['search'])) {
    $user = searchUser($_REQUEST['search']);
    print_r($user);
}
