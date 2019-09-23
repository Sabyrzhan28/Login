<?php
	 require_once('config/config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style.css">
	<title>Login</title>

</head>
<body>

	<div class="bg-new"> </div>
	
			<div class="login" >
			  	<div class="login-triangle"></div>
			  
			  	<h2 class="login-header">Логин</h2>

				  <form action="check-login.php" class="login-container" method="POST">
				    <p><input type="text" name="name" placeholder="Логин"></p>
				    <p><input type="password" name="password" placeholder="Пороль"></p>
				    <p style="font-size: 14px;text-align: center;"><?php echo @$_SESSION['error']; ?></p>
				    <p><input type="submit" value="Войти"></p>
				  	<a href="register.php"><p style="text-align: center;text-decoration: none;">Регистрация</p></a>
				  </form>
			</div>

</body>
</html>
