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
   <section id="main">
		<div class="container text-center">
			<h1 class="timetable-highlight">Расписание</h1>
			<img src="img/timetable.jpg" alt="timetable" class="timetable-pic">
			<div class="row justify-content-center timetable-content">
					<div class="col-md-6">
						<h2 class="timetable-name">Расписание на текущую неделю</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Сотрудник</strong>
								<strong>Число</strong>
								<strong>Время</strong>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">01. /К/Кузнецов А.И.
								<p>30.09.19<br> 01.10.19<br> 04.10.19</p>
								<p>9:30</p>
								<p>15:30</p>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">02. /К/Иваненко Д.П.
								<p>02.10.19<br> 03.10.19<br> 05.10.19</p>
								<p>9:30</p>
								<p>15:30</p>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">03. /П/Петрова Л.М.
								<p>30.09.19<br> 01.10.19<br> 04.10.19</p>
								<p>10:00</p>
								<p>16:00</p>
							</li>	
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">04. /П/Емельянова С.Г.
								<p>02.10.19<br> 03.10.19<br> 05.10.19</p>
								<p>10:00</p>
								<p>16:00</p>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>К - кухня; П - Продавец.</strong>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h2 class="timetable-name">Расписание на следующую неделю</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Сотрудник</strong>
								<strong>Число</strong>
								<strong>Время</strong>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">01. /К/Кузнецов А.И.
								<p>09.10.19<br> 10.10.19<br> 12.10.19</p>
								<p>9:30</p>
								<p>15:30</p>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">02. /К/Иваненко Д.П.
								<p>07.10.19<br> 08.10.19<br> 11.10.19</p>
								<p>9:30</p>
								<p>15:30</p>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">03. /П/Петрова Л.М.
								<p>09.10.19<br> 10.10.19<br> 12.10.19</p>
								<p>10:00</p>
								<p>16:00</p>
							</li>	
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">04. /П/Емельянова С.Г.
								<p>07.10.19<br> 08.10.19<br> 11.10.19</p>
								<p>10:00</p>
								<p>16:00</p>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">К - кухня; П - Продавец.
							</li>
						</ul>
					</div>
				</div>
		</div>
   </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>