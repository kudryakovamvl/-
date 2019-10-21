<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="style-form.css" type="text/css">
    <title>Cookmos</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand text-dark" href="index.php"><img src="img/logo.png" class="logo"> CookMos</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		<ul class="navbar-nav">
		  <li class="nav-item active">
			<a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="menu.php">Меню</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="dishes.php">Блюда</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="journal.php">Журнал заказов</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="products.php">Продукты</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="contacts.php">Контакты</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="login.php">Личный кабинет</a>
		  </li>
		</ul>
	  </div>
   </nav>
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="img/user.png" alt="user">
				</div>
				<form class="col-12" method="POST">
                    <!--<div class="form-group-1">
						<label for="userType">Я: </label>
						<label><input type="radio" name="userType" value="customer" class="custom-radio" required>&nbsp;Покупатель</label>
						<label><input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;Админ</label>
					</div>-->
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Имя пользователя" required>
					</div>
					<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Пароль" required>
					</div>
					
					<button class="btn btn-primary" type="submit" name="login-submit"><i class="fas fa-sign-in-alt"></i>Войти</button>
				</form>
	</div>
	</div>
	</div>
	<?php 
		session_start();
		require('connect.php');
		if (isset($_POST['username']) and isset($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection)); /*отправляем запрос в базу данных*/
			$count = mysqli_num_rows($result); /*число рядов в выборке*/
			
			if ($count == 1) { /*тогда создается сессия*/
				$_SESSION['username'] = $username;
			} else {
				header("Location: error.php");
			}
		}
		if (isset($_SESSION['username'])) {
			$username = $_SESSION['username'];
			header("Location: lc.php");
			/*echo "<style>body {text-align: center; color: #fff; font-size: 20px;}</style>";
			echo "Добро пожаловать, " . ucfirst($username) . "!<br/>";
			echo "Вы вошли в систему!<br/><br/>";
			echo "<a href='logout.php' class='btn btn-primary'> Выйти из системы </a>";*/
		}
	?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>