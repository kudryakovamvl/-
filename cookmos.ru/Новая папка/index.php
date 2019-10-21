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
   <div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
			<li data-target="#slides" data-slide-to="4"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/about.jpg" class="d-block w-100" alt="car1">
				<div class="carousel-caption">
					<h1 class="display-2">CookMos</h1>
					<h3 class="lead" id="white">Если хочешь ты поесть, заходи на CookMos сеть. Ты поешь совсем немножко, но доволен будешь, крошка!</h3>
					<button type="button" onclick="window.location.href='#about'" class="btn btn-primary btn-outline-light btn-lg">
						Подробнее о нас
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/about.jpg" class="d-block w-100" alt="car2">
				<div class="carousel-caption">
					<h1 class="display-2">CookMos</h1>
					<h3 class="lead" id="white">Наши гости могут насладиться традиционной русской кухней. В нашей столовой недорого не только обедать, но и встречаться с друзьями на переменах.</h3>
					<button type="button" onclick="window.location.href='#about'" class="btn btn-primary btn-outline-light btn-lg">
						Подробнее о нас
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/about.jpg" class="d-block w-100" alt="car3">
				<div class="carousel-caption">
					<h1 class="display-2">CookMos</h1>
					<h3 class="lead" id="white">У нас представлен широкий ассортимент блюд и закусок. Мы против искусственных усилителей вкуса и пищевых добавок!</h3>
					<button type="button" onclick="window.location.href='#about'" class="btn btn-primary btn-outline-light btn-lg">
						Подробнее о нас
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/about.jpg" class="d-block w-100" alt="car3">
				<div class="carousel-caption">
					<h1 class="display-2">CookMos</h1>
					<h3 class="lead" id="white">Для приготовления блюд мы используем только натуральные приправы и специи, те же самые приправы, которые вы используете в домашней кухне.</h3>
					<button type="button" onclick="window.location.href='#about'" class="btn btn-primary btn-outline-light btn-lg">
						Подробнее о нас
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/about.jpg" class="d-block w-100" alt="car3">
				<div class="carousel-caption">
					<h1 class="display-2">CookMos</h1>
					<h3 class="lead" id="white">Можно больше не размышлять о том, что приготовить на обед вкусно и быстро — возьмите блюда из “CookMos”. Мы готовим по-домашнему!</h3>
					<button type="button" onclick="window.location.href='#about'" class="btn btn-primary btn-outline-light btn-lg">
						Подробнее о нас
					</button>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
   </div>
   <section class="popular">
		<div class="container text-center">
			<h2 class="display-4 text-primary popular-name">Популярное</h2>
			<div class="row grid">
				<div class="col-sm-4 grid__item">
					<div class="card border-0 popular-card">
						<a class="content-link grid__link" href="menu.html">
						<img class="card-img-top grid__picture" src="img/cont-1.jpg" alt="cont1">
						<div class="grid__overlay">
							<div class="grid__text">Первое</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 grid__item">
					<div class="card border-0 popular-card">
						<a class="content-link grid__link" href="menu.html">
						<img class="card-img-top grid__picture" src="img/cont-2.jpg" alt="cont2">
						<div class="grid__overlay">
							<div class="grid__text">Второе</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 grid__item">
					<div class="card border-0 popular-card">
						<a class="content-link grid__link" href="menu.html">
						<img class="card-img-top grid__picture" src="img/cont-3.jpg" alt="cont3">
						<div class="grid__overlay">
							<div class="grid__text">Салаты</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 grid__item">
					<div class="card border-0 popular-card">
						<a class="content-link grid__link" href="menu.html">
						<img class="card-img-top grid__picture" src="img/cont-5.jpg" alt="cont5">
						<div class="grid__overlay">
							<div class="grid__text">Гарниры</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 grid__item">
					<div class="card border-0 popular-card">
						<a class="content-link grid__link" href="menu.html">
						<img class="card-img-top grid__picture" src="img/cont-4.jpg" alt="cont4">
						<div class="grid__overlay">
							<div class="grid__text">Десерты</a></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 grid__item">
					<div class="card border-0 popular-card">
						<a class="content-link grid__link" href="menu.html">
						<img class="card-img-top grid__picture" src="img/cont-6.jpg" alt="cont6">
						<div class="grid__overlay">
							<div class="grid__text">Напитки</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
   </section>
   <section class="about" id="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 about-title">
					<h2 class="display-4 text-primary text-center">О нас</h2>
				</div>
				<div class="col-sm-12 about-text">
					<p>Добро пожаловать в столовую CookMos.<br>
					Домашняя кухня, уютная обстановка и самые демократичные цены в городе!<br>
					Пришло время обеда? Ты сильно проголодался после пар? Тогда иди к нам.<br> Мы предлагаем большой ассортимнт блюд русской кухни, которые приготавливаются непосредственно в заведении и подаются горячими. <br>
					Наша столовая находится на третьем этаже корпуса "А" в Волгоградском государственном университете.<br> Студентам больше не придется думать, где поесть после тяжелого учебного дня или на перемене.</p>
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