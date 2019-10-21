<?php 
	session_start();
	if ($_SESSION['username'] != 'admin') {
		header("Location: login.php");
	}
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
			<a class="nav-link" href="workers.php">Панель админа</a>
		  </li>
		</ul>
	  </div>
   </nav>
   
<div class="info">
	<?php
	if (isset($_SESSION['username'])) {
			$username = $_SESSION['username'];
			echo "<style>body {text-align: center; color: #000; font-size: 25px;} .info { margin-top: 140px;}</style>";
			echo "Добро пожаловать, " . ucfirst($username) . "!<br/>";
			echo "Вы вошли в систему!<br/><br/>";
			echo "<a href='person.php' class='btn btn-primary'> Моя информация </a><br/><br/>";
			echo "<a href='workers.php' class='btn btn-primary'> Панель админа </a><br/><br/>";
			echo "<a href='logout.php' class='btn btn-primary'> Выйти из системы </a>";
		}
	?>

	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>