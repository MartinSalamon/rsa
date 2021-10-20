<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="header-footer/header-footer.css" />
	<link rel="stylesheet" type="text/css" href="css/naroci-zdaj.css" />
	<title>Spuži Natakar</title>
</head>
<body>
	<?php include "header-footer/header.php";?>

	<div id="container">
	    <div id="content">
	    	<form class = "narocilo" id = "narocilo" method="post">
	    		<label for="email" class = "label">Vaš elektronski naslov</label><br>
	  			<input type="email" id="email" name="email" class = "input-field"><br>
	  			<label for="email" class = "label">Naročilo</label><br>
	  			<textarea rows="3" class = "input-field" placeholder="vnesite narocilo tukaj"></textarea><br><br>
	  			<button type="submit" id = "oddaj-narocilo" method="post">Oddaj naročilo</button>
	    	</form>
	    </div>
    </div>

	<?php include "header-footer/footer.php";?>
</body>
</html>