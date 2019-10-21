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
		<div class="menu text-center">
			<div class="container">
				<h1 class="display-4 black menu-title">Меню</h1>
				<img src="img/menu.jpg" alt="menu-pic" class="menu-pic">
				<div class="row justify-content-center menu-content">
					<div class="col-md-6">
						<h2 class="menu-name">Первое</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>Борщ с грудинкой</strong>
								<?php
									if (isset($_SESSION['username'])) {
										echo '<style>.secret-info {font-size: 13px;}</style>';
										echo '<p class="secret-info">(классический борщ, подается деревенской сметаной, салом, гренками и зеленым луком)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">320</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>Уха</strong>
								<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(уха из окуней и белого амура, приготовленная по классическому рецепту с добавлением
о												овощей и специй. Подается с расстегаем)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">230</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>Куриный суп с домашней лапшой</strong>
								<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(нежнейшая куриная грудка, пшеничная лапша, морковь и картошка)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">200</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>Суп-пюре из тыквы</strong>
								<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(Суп-пюре на основе сливочного сыра, сливок и овощей: тыквы, моркови и имбиря.
												Подается с жареными шампиньонами. На выбор гостя можно приготовить суп без сливо)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">200</span>
							</li>							
						</ul>
					</div>
					<div class="col-md-6">
						<h2 class="menu-name">Второе</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>Жареный язык на гриле</strong>
								<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(нежный говяжий язык, морковь, стебель сельдерея)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">650</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>Сибас с тыквенным гратеном</strong>
								<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(филе сибаса, запеченное в пергаменте. Подается с зажаренным до корочки
												гратеном из ломтиков тыквы и корня сельдерея)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">850</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center"><strong>«Телец и Перец»</strong>
								<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(сочная телятина, тушеная в сливках со сладким перцем. Подается с отварным
												картофелем, зеленью и чесноком)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">630</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Стерлядь с грибами и сыром
								<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(стерлядь, запеченная с шампиньонами, сыром гауда и сливочным соусом)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">890</span>
							</li>							
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<h2 class="menu-name">Салаты</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Салат с куриной грудкой
							<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(микс салатов, куриная грудка, свежее яблоко, виноград и
												сыр дорблю. Заправлен фирменным йогуртовым соусом)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">320</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Салат с теплыми морепродуктами
							<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(Морепродукты, обжаренные в ароматных специях, в ансамбле с хрустящей зеленью, киви, авокадо, черри и
												сыром пармезан под нежным сливочным соусом)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">690</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Салат «Цезарь» с креветками
							<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(Вкуснейшие креветки в объятиях хрустящих
												листьев салата и домашнего хлеба)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">600</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Салат «Цезарь» с курицей
							<?php
									if (isset($_SESSION['username'])) {
										echo '<p class="secret-info">(Вкусное-вкусное куриное мясо в объятиях хрустящих
												листьев салата и домашнего хлеба)</p>';
									}
								?>
								<span class="badge badge-primary badge-pill">430</span>
							</li>							
						</ul>
					</div>
					<div class="col-md-6">
						<h2 class="menu-name">Гарниры</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Картофельное пюре
								<span class="badge badge-primary badge-pill">70</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Овощи гриль
								<span class="badge badge-primary badge-pill">190</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Картофель по-деревенски
								<span class="badge badge-primary badge-pill">80</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Рис дикий отварной
								<span class="badge badge-primary badge-pill">70</span>
							</li>							
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<h2 class="menu-name">Десерты</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">«Наполеон»
								<span class="badge badge-primary badge-pill">130</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Медовик
								<span class="badge badge-primary badge-pill">185</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Сорбе из клубники с мятой
								<span class="badge badge-primary badge-pill">80</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Мороженое пломбир
								<span class="badge badge-primary badge-pill">170</span>
							</li>							
						</ul>
					</div>
					<div class="col-md-6">
						<h2 class="menu-name">Напитки</h2>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center"><strong>Название</strong>
								<span class="badge badge-primary badge-pill"><strong>Цена (руб)</strong></span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Морс домашний
								<span class="badge badge-primary badge-pill">225</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Смузи со шпинатом
								<span class="badge badge-primary badge-pill">290</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Смузи «Смородина»
								<span class="badge badge-primary badge-pill">290</span>
							</li>
							<li class="list-group-item list-item d-flex justify-content-between align-items-center">Фирменный имбирный чай
								<span class="badge badge-primary badge-pill">180</span>
							</li>							
						</ul>
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