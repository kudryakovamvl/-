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
		</ul>

		<?php
			if (isset($_SESSION['username'])) {
				echo "<a href='logout.php' class='btn btn-primary'>Выйти</a>";
			}
		  ?>
	  </div>
   </nav>
  <section>
		<div class="dishes text-center">
			<div class="container">
				<h1 class="display-4 black dish-title">Сезонные блюда</h1>
				<img src="img/cont-6.jpg" alt="dishes-pic" class="dishes-pic">
				<div class="row justify-content-center menu-content">
					<div class="col-md-6">
						<h2 class="menu-name">Лето</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Коктейль молочный "Клубника"
								<span class="badge badge-primary badge-pill">120</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Коктейль молочный "Ваниль"
								<span class="badge badge-primary badge-pill">120</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Коктейль молочный "Шоколад"
								<span class="badge badge-primary badge-pill">120</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Вафельный рожок
								<span class="badge badge-primary badge-pill">35</span>
							</li>	
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">"Айс Кофе"
								<span class="badge badge-primary badge-pill">150</span>
							</li>	
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Пирожок клубничный
								<span class="badge badge-primary badge-pill">65</span>
							</li>	
						</ul>
					</div>
					<div class="col-md-6">
						<h2 class="menu-name">Осень</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Глинтвейн
								<span class="badge badge-primary badge-pill">170</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Пирожок с малиной
								<span class="badge badge-primary badge-pill">70</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Чай с облепихой
								<span class="badge badge-primary badge-pill">190</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Суп с лесными грибами
								<span class="badge badge-primary badge-pill">200</span>
							</li>	
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Паста с овощами
								<span class="badge badge-primary badge-pill">270</span>
							</li>	
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Суп-пюре из тыквы
								<span class="badge badge-primary badge-pill">200</span>
							</li>	
						</ul>
					</div>
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