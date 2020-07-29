<?php
setcookie('status', "OK", time()-3600, '/');
header('location: HomePage.html');
?>