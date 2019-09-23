<?php 
	require_once('config/config.php');

	$secretPassword = 'sabr';

	$pass = $_POST['password'];
	$login = $_POST['name'];



	if(strlen($_POST['name']) < 3){
        $_SESSION['error']= "Логин должен быть не меньше 3-х символов";
        header('Location: login.php');
    }
    else{

    	$_SESSION['error']= null;

	$sql = "SELECT * FROM users where login = '$login' LIMIT 1";
	$result = $db->query($sql);
	$product = $result->fetch(PDO::FETCH_ASSOC);

	$id = $product['id'];

	if($_POST['password'] == $product['pass']){
		$_SESSION['login']='on';
		$_SESSION['id']= $id;
		$_SESSION['name']= $login;
		header('Location: index.php');
	}else{
		header('Location: not-login.php');
	}


	}


?>