<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/test.js"></script>
</head>
<body>
<nav class="comandi">
	<input type="button" id="rosso" value="rosso">
	<input type="button" id="giallo" value="giallo">
	<input type="button" id="alterna" value="alterna">
</nav>
	<?php createDiv(10); ?>
</body>
</html>

<?php

function createDiv($elements){
	for ($i=0; $i < $elements; $i++){
		?> <div class="testClass" id="element-<?php echo $i?>"></div><?php
	}
}

?>