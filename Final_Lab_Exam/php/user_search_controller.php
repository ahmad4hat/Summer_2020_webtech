<?php
require_once('../service/userService.php');
// $search = "";





if (isset($_POST['search'])) {

    $user = searchUser($_REQUEST['search']);

    echo json_encode($user);

    // $table_first = "
    // <table border=1>
    // 		<tr>
    // 			<td>ID</td>
    // 			<td>Username</td>
    // 			<td>Name</td>
    // 			<td>Company Name</td>
    // 			<td>Contact no</td>
    // 			<td>password</td>
    // 			<td>type</td>
    // 			<td>action</td>
    // 		</tr>

    // ";
    // $table_second="";
    // for ($i = 0; $i != count($users); $i++) {

    //     $table_second=""

    // }
}
