<?php 

include_once 'includes/function.php';
include_once 'includes/session.php';
guard('login.php', 'You must login first');

logout('login.php', 'You must login first');

exit();
?>