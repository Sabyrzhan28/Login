<?php
	 require_once('config/config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="bg-new"> </div>
	
	<div class="login" >
			  	<div class="login-triangle"></div>
			  
			  	<h2 class="login-header">Регистрация</h2>

				  <form action="add.php" class="login-container" method="POST">
							<p><input name="login" type="text" class="form-control" placeholder="Логин*"></p>
							<p><input name="pass" type="password" class="form-control" placeholder="Пороль*"></p>

				    <p style="font-size: 14px;text-align: center;"><?php echo @$_SESSION['error']; ?></p>


				    <p><input type="submit" value="Регистрация"></p>
				    <a href="login.php"><p style="text-align: center;text-decoration: none;">Войти</p></a>
				  </form>
			</div>

</body>
</html>
