<div id="header">
		<?php $url = $_SERVER['REQUEST_URI']; ?>
		<h1 id="naslov">Spuži Natakar</h1>
		<div id="header-links">
			<a <?php if(preg_match_all("/index.php/i", $url)) { ?> class="active" <?php } ?> href="index.php">O Nas</b></a>
			<a <?php if(preg_match_all("/ponudba.php/i", $url)) { ?> class="active" <?php } ?> href="ponudba.php">Ponudba</a>
			<a <?php if(preg_match_all("/posebna-p.php/i", $url)) { ?> class="active" <?php } ?> href="posebna-p.php">Posebna ponudba</a>
			<a <?php if(preg_match_all("/naroci-zdaj.php/i", $url)) { ?> class="active" <?php } ?> href="naroci-zdaj.php">Naroči zdaj</a>
		</div>
    </div>