<?php
	session_start();
		if(isset($_SESSION["username"])){
			header('Location:regpr.php');
		}
?>
<!DOCTYPE html>
<html>
		<head>
				<meta charset="utf-8">
				<title>Авторизация</title>
				<link rel="stylesheet" href="style.css" />
		</head>
		<body>
			<div class="logo2">
				<h1> Hello, world? </p>
			</div>
			
			<?php
				require('db.php');
				session_start();
				if (isset($_POST['username'])){
					 $username = stripslashes($_REQUEST['username']);
					 $username = mysqli_real_escape_string($con,$username);
					 $password = stripslashes($_REQUEST['password']);
					 $password = mysqli_real_escape_string($con,$password);
					 $query = "SELECT * FROM `users` WHERE username='$username'
					and password='".md5($password)."'";
					 $result = mysqli_query($con,$query) or die(mysql_error());
					 $rows = mysqli_num_rows($result);
						if($rows==1){
					 $_SESSION['username'] = $username;
				 header("Location: index.php");
						 }else{
				 echo "<div class='error'>
				<h3>Неверно введён логин/пароль.</h3>
				</div>";
				 }
					}else{
			?>
		<div class="content">
			<h1>Авторизация</h1>
			<form action="" method="post" name="login">
				<div class="auth">
				<label>Введите Ваше имя: <br/> <input type="text" name="username" placeholder="Имя пользователя" required /> <br/>
				<label>Введите Ваш пароль: </br> <input type="password" name="password" placeholder="Пароль" required /> <br/>
				<input name="submit" type="submit" value="Готово" /> <br/>
				<p>Ещё не зарегистрированы?<a href="sem8.php">Зарегистрироваться</a></p>
				</div>
			</form>
		</div>
		
		</div>
						
		<div class="left">
			
		</div>
						
		<div class="right">
						
		</div>
						
		<div class="down">
			<p>@IU-4</p>
		</div>
		
		<?php } ?>
		</body>
</html>