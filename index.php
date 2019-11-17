<?php
	include("auth.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hello, world</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div class="form">
			
			<div class="logo">
				<h1>Hello, world!</h1>
			</div>
			
			<div class="content">
				<h1>Ну привет, <?php
				 echo $_SESSION['username'];
				?></h1>
				<p align="center"><a href="DZ1.php">Тут делается сайт (дз)</a></br></p>
				<div class="registr">
					Мир менялся на глазах,</br>
					Зов стихий в людских сердцах</br>
					Посеял первобытный страх, посеял страх,</br>
					Самого Дагона сын</br>
					Из морских пришел глубин</br>
					То был судьбы не добрый знак, недобрый знак.</br>
					Каждый день в умах росло</br>
					Необузданное зло</br>
				</div>
			</div>
			
			<div class="logout">
				<?php echo $_SESSION['username']; ?> <br/>
				<a href="logout.php">Выйти</a>
			</div>
			
			<div class="left">
			
			</div>
			
			<div class="right">
			
			</div>
			
			<div class="down">
			<p>@IU-4</p>
			</div>
			
		</div>
	</body>
</html>