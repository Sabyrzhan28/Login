<?php
require_once('config/config.php');


$sql = "INSERT INTO users (login, pass) 			
			VALUES (:login, :pass)";

$stmt = $db->prepare($sql);

$stmt->bindValue(':login',$_POST['login']);
$stmt->bindValue(':pass',$_POST['pass']);


$stmt->execute();

header("location: login.php", true, 301 ); exit;

?>