<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="header-footer/header-footer.css" />
	<style type="text/css">
		<?php
			include 'css/naroci-zdaj.css'
		?>
	</style>
	
	<title>Spuži Natakar</title>
</head>
<body>
	<?php include "header-footer/header.php";?>

	<div id="container">
	    <div id="content">
	    	<form class = "narocilo" id = "narocilo" method="post">
	    		<label for="email" class = "label">Vaš elektronski naslov</label><br>
	  			<input type="email" id="email" name="email" class = " input-field"><br>
	  			<label for="email" class = "label">Naročilo</label><br>
	  			<textarea rows="4" class = "input-field" placeholder="vnesite narocilo tukaj"><?php echo $_GET["text"]; ?></textarea><br><br>
	  			<button type="submit" id = "oddaj-narocilo" method="post"><b>Oddaj naročilo</b></button>
	    	</form>
	    </div>
    </div>

	<?php include "header-footer/footer.php";?>
</body>
</html>