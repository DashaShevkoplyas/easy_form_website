<?php
	session_start();
	unset($_SESSION['login']);
	session_unset();
	session_destroy();
	echo "Logged out";
	header("Location: forExistedUsers.php");
?>