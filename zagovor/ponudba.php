<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="header-footer/header-footer.css" />
	<link rel="stylesheet" href="css/ponudba.css">
	<title>Spuži Natakar</title>
	<script>
		window.onload = () => {
			let container = document.getElementById('container');
			let w = (container.clientWidth / 2) - 24;
			container.style['grid-template-columns'] = `${w}px ${w}px`;
		};
	</script>
</head>

<body>
	<?php include "header-footer/header.php"; ?>

	<div id="container">
		<div class="seznam">
			<div>
				<h2>Slastni Burger</h2>
				<p>Krompirček a la carte<br><br>6€</p>
			</div>
			<img src="pictures/burger-1.jpg">
		</div>

		<div class="seznam">
			<div>
				<h2>Še lastnejši burger</h2>
				<p>Domača govedina s krompirčkom<br><br>5€</p>
			</div>
			<img src="pictures/burger-2.jpg">
		</div>

		<div class="seznam">
			<div>
				<h2>Klasik</h2>
				<p>Z njim se je leta 2012 začela slovenska burger revolucija! Krompirjeva bombica popečena na maslu, 100% govedina slovenskega porekla, naša classic hišna omaka, sveža domača solata, rezine sladkega paradižnika in cheddar sir.</p>
				<p>5€</p>
			</div>
			<img src="pictures/burger-3.jpg">
		</div>

		<div class="seznam">
			<div>
				<h2>Le Brie</h2>
				<p>Le brie je bila naša druga stvaritev in za nekatere "the Hood Burger". Krompirjeva bombica popečena na maslu, 100% govedina slovenskega porekla, hišna majoneza z mariniranimi šampinjoni, rezine sldakega paradižnika, sveža rukola in Brie sir. Finesa na ulični način.</p>
				<p>5€</p>
			</div>
			<img src="pictures/burger-4.jpg">
		</div>

	</div>

	<?php include "header-footer/footer.php"; ?>
</body>

</html>