<?php 

	require_once('config/config.php');
	unset($_SESSION['login']);
	header('Location: index.php');
 ?>