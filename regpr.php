<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>	
	
			<div class="logo">
				<h1>Hello, world!</h1>
			</div>
			
			<div class="logout">
				</br></br></br>я смотрю за тобой
			</div>
	
			<div class="content">	
				<p align="center">Вы уже авторизованы как <?php 
				session_start();
				echo $_SESSION['username'];?>.</br>
				<a href='logout.php'>Выйти и авторизоваться под другим именем?</a></br>
				<a href='index.php'>На главную.</a></p>
			</div>
			
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