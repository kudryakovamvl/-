<?php 
	session_start();
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<link href="responsive.css" type="text/css" rel="stylesheet" />
	<title>CookMos</title>
  </head>
  <body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
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

		  <?php
			if (isset($_SESSION['username'])) {
				echo "<a href='logout.php' class='btn btn-primary'>Выйти</a>";
			}
		  ?>
		</ul>
	  </div>
   </nav>
	<section>
		<div class="content text-center">
			<div class="container">
				<h1 class="display-4 black contact-title">Контакты</h1>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<p class="contact-p">Телефон:<a href="tel: +78442131313"> +7 - (8442) 13 - 13 - 13</a></p>
						<p class="contact-p">Часы работы: 10:00-15:00</p>
						<p class="contact-p">Email: <a href="mailto:cookmos@yandex.ru">cookmos@yandex.ru</a></p>
						<p class="contact-p">Адрес: г. Волгоград, пр. Университетский, 100</p>

					</div>
					</div>
				<div class="row justify-content-center">
					<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2636.328327797971!2d44.4206448156318!3d48.64183387926688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x410532b923d22031%3A0x4f1b80edb40f3f47!2z0JLQvtC70JPQow!5e0!3m2!1sru!2sru!4v1567779113478!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<p class="footer-content-1">&copy;2019 <a class="footer-link" href="index.html">CookMos</a></p>
					<p class="footer-content-2">Все права защищены</p>
				</div>
			</div>
		</div>
	</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>