<?php
//logout.php Logout page and here we are destroying all the sessions and cache
session_start();
session_destroy();
header("location: login.php");
?>