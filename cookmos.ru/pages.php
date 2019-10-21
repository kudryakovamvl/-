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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="style-admin.css" type="text/css">
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
			<li class="nav-item">
			<a class="nav-link" href="workers.php">Панель админа</a>
		  </li>
		  <?php
			if (isset($_SESSION['username'])) {
				echo "<a href='logout.php' class='btn btn-primary'>Выйти</a>";
			}
		  ?>
		</ul>
	  </div>
   </nav>
   <header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1 class="admin"><i class="fa fa-cog" aria-hidden="true"></i>Панель админа</h1>
				</div>
			</div>
		</div>
   </header>
   <section id="main" class="pages">
		<div class="container">
			<div class="col-md-3 float-left">
				<div class="list-group">
				  <a href="workers.php" class="list-group-item list-group-item-action nav-header">
					<i class="fa fa-cog" aria-hidden="true"></i> Основная информация
				  </a>
				  <a href="pages.php" class="list-group-item list-group-item-action active nav-first"><i class="fa fa-columns" aria-hidden="true"></i> Страницы <span class="badge badge-pill badge-primary">6</span></a>
				  <a href="users_a.php" class="list-group-item list-group-item-action nav-second"><i class="fa fa-users" aria-hidden="true"></i> Пользователи <span class="badge badge-pill badge-primary">2</span></a>
				  <a href="timetable.php" class="list-group-item list-group-item-action nav-third"><i class="fa fa-calendar" aria-hidden="true"></i> Расписание <span class="badge badge-pill badge-primary">2</span></a>
				</div>
			</div>
			<div class="col-md-9 float-right">
				<div class="card pages-card">
				  <h5 class="card-header">Страницы</h5>
				  <div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<ul class="list-group">
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Главная
									<a class="btn btn-default" href="index.php"><span class="badge badge-primary badge-pill">Обзор</span></a>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Меню
									<a class="btn btn-default" href="menu.php"><span class="badge badge-primary badge-pill">Обзор</span></a>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Блюда
									<a class="btn btn-default" href="dishes.php"><span class="badge badge-primary badge-pill">Обзор</span></a>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Журнал заказов
									<a class="btn btn-default" href="journal.php"><span class="badge badge-primary badge-pill">Обзор</span></a>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Продукты
									<a class="btn btn-default" href="products.php"><span class="badge badge-primary badge-pill">Обзор</span></a>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Контакты
									<a class="btn btn-default" href="contacts.php"><span class="badge badge-primary badge-pill">Обзор</span></a>
								  </li>
							</ul>
						</div>
						</div>
				  </div>
				</div>
			</div>
		</div>
   </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>