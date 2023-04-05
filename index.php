<!DOCTYPE html>
<html id="top">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>i&web | Home</title>

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fontawesome/css/all.css">

	<link rel="stylesheet" type="text/css" href="resources/css/style.css?<?php echo time(); ?>">

	<link rel="website icon" type="png" href="resources/img/icoweb.png">
</head>
<body>
	<nav class="d-flex sticky-top justify-content-center">
		<ul class="nav">
			<li class="nav-link"><a href="index.php">Beranda</a></li>
			<div class="dropdown">
				<li class="nav-link">
					<a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
				</li>
				<ul class="dropdown-menu">
					<li><a href="public/fantech.php" class="dropdown-item">Fantech</a></li>
					<li><a href="public/razer.php" class="dropdown-item">Razer</a></li>
					<li><a href="public/rog.php" class="dropdown-item">ROG</a></li>
				</ul>
			</div>
			<li class="nav-link"><a href="public/laptop.php">Laptop</a></li>
			<li class="nav-link"><a href="#warna">Warna Pallete</a></li>
			<li class="nav-link"><a href="#tentang">Tentang</a></li>
		</ul>
	</nav>

	<header>
		<div id="carouselGambar" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="resources/img/items/Slide1.png">
				</div>
				<div class="carousel-item">
					<img src="resources/img/items/Slide2.png">
				</div>
				<div class="carousel-item">
					<img src="resources/img/items/slide3.png">
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselGambar" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselGambar" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>
	</header>

	<content>
		<div class="page1">
			<div class="card" style="width: 18rem;">
				<i class="fa-regular fa-keyboard fa-4x"></i>
				<div class="card-body">
					<hr>
					<p class="card-text">List beberapa equipment seperti keyboard, mouse, dan mousepad</p>
				</div>
			</div>

			<div class="card" style="width: 18rem;">
				<i class="fa-solid fa-laptop fa-4x"></i>
				<div class="card-body">
					<hr>
					<p class="card-text">List laptop Asus, Razer, dan gaming lainnya</p>
				</div>
			</div>


			<div class="card" style="width: 18rem;">
				<i class="fa-solid fa-palette fa-4x"></i>
				<div class="card-body">
					<hr>
					<p class="card-text">List beberapa kobinasi warna yang menarik untuk dicoba pada website anda</p>
				</div>
			</div>

			<div class="card" style="width: 18rem;">
				<i class="fa-solid fa-globe fa-4x"></i>
				<div class="card-body">
					<hr>
					<p class="card-text">Website tugas Interaksi Manusia dan Komputer</p>
				</div>
			</div>
		</div>

		<div class="page2" id="warna">
			<div class="gambar">
				<img src="resources/img/img-palette.jpg" height="450">
			</div>

			<div class="teks">
				<center><h1>Warna Palette</h1></center>
				<hr>
				<p>Beberapa list kombinasi warna pallete untuk membangun suatu website yang dapat digunakan.</p>
				<center>
					<a class="btn" role="button" href="public/warna.php">Selengkapnya</a>
				</center>
			</div>
		</div>

		<div class="page3" id="tentang">
			<div class="card text-center">
				<div class="card-header">
					Info Gaess
				</div>
				<div class="card-body">
					<h5 class="card-title">Website saya</h5>
					<p class="card-text">Konten pada website ini berisi tentang beberapa informasi mengenai equipment seperti keyboard, mouse, dan lainnya. Termasuk rekomendasi laptop gaming dan juga beberapa kombinasi warna.</p>
					<a href="public/tentang.php" class="btn">Selengkapnya</a>
				</div>
			</div>
		</div>
	</content>

	<footer>
		<div class="d-flex flex-row">
			<p class="cpr">©️ 2023 Rafly Maulidan, i&web</p>
		</div>

		<div class="d-flex flex-row">
			<p class="perlinkan"><a href="#top" class="nav-link">Ke Atas ⋀</a></p>
		</div>
	</footer>

	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.js"></script>

	<script type="text/javascript" src="resources/js/script.js"></script>
</body>
</html>