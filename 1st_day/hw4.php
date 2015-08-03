<html>
<head></head>
<body>
	<?php
	$colors = array("red","blue","cyan","green","brown","aqua" ); 
	foreach ($colors as $color) { ?>
		<li style="background:<?php echo $color; ?>"> 
			<?php echo ucfirst($color);?>
		</li>
	<?php } ?> 	
</body>
</html>