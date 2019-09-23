<?php
	 require_once('config/config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="bg-new"> </div>
	
<?php 
	if(isset($_SESSION['login']) && $_SESSION['login'] == 'on' ){

	}else{
		header('Location: login.php');
	}
	 ?>

	

	<div class="login" >
			  	<div class="login-triangle"></div>

				<h2 class="login-header">Вы авторизованы</h2>

			  	<div class="login-container">

			  	<h2 style="text-align: center;">Ваш id: <?php echo $_SESSION['name'];  ?></h2>

				<h2 style="text-align: center;">Ваш id: <?php echo $_SESSION['id'];  ?></h2>

				<a href="logout.php"><p style="text-align: center;">Выйти из системы</p></a>

				</div>
	</div>


</body>
</html>
