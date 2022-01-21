<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="header-footer/header-footer.css" />
	<link rel="stylesheet" href="css/posebna-p.css">
	<title>Spuži Natakar</title>

	<script>
		function kupi(e) {
			let cards = Array.from(document.getElementById('cards').getElementsByClassName('card'));

			let text = cards.map(
				card => ({
					i: card.querySelector('h2').innerText,
					k: card.getElementsByClassName('kolicina')[0].value
				})
			).filter(
				({
					k
				}) => k > 0
			).map(
				({
					i,
					k
				}) => `${i}: ${k}x`
			).join('\n');

			window.location.href = `naroci-zdaj.php?text=${encodeURIComponent(text)}`;
		}
	</script>
</head>

<body>
	<?php include "header-footer/header.php"; ?>

	<div id="container">
		<div id="cards">
			<div class="card">
				<div>
					<div>
						<h2>Kebab</h2>
						<p>Najboljši kebab narejen iz mešanega mesa(govedina, svinina, piščanec) in najboljše lepinje.</p>
					</div>
					<img src="pictures/kebab.jpg">
				</div>
				<input class="kolicina" type="number" name="kol" min="0" value="0" step="1">
			</div>
			<div class="card">
				<div>
					<div>
						<h2>Pomfri</h2>
						<p>Sveže pečen krompirček v olju z hrustljavo skorjo in mehkim jedrom.</p>
					</div>
					<img src="pictures/pomfri.jpg">
				</div>

				<input class="kolicina" type="number" name="kol" min="0" value="0" step="1">
			</div>
			<div class="card">
				<div>
					<div>
						<h2>Pica</h2>
						<p>Klasična pica z pelati, sirom in gobami.</p>
					</div>
					<img src="pictures/pizza.jpg">
				</div>


				<input class="kolicina" type="number" name="kol" min="0" value="0" step="1">
			</div>
			<div class="card">
				<div>
					<div>
						<h2>Sladoled</h2>
						<p>Domač sladoled z okusom čokolade. Mleko za sladoled je pridobljeno od lokalnih kmetij.</p>
					</div>
					<img src="pictures/ice-cream.jpg">
				</div>


				<input class="kolicina" type="number" name="kol" min="0" value="0" step="1">
			</div>
		</div>

		<div class="kupi-btn-bar">
			<button class="btn" type="button" onclick="kupi(event)"><span>Kupi</span></button>
		</div>
	</div>

	<?php include "header-footer/footer.php"; ?>
</body>

</html>