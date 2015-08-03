
<html>
<head></head>
<body>
<?php
for ($i=1; $i<=5  ; $i++) {
	for ($j=1; $j<=$i ; $j++) { 
		echo $j;
	}
	echo"<br>";
	}
	echo"<p></p>";
for ($i=5; $i>=1  ; $i--) {
	for ($j=1; $j<=$i ; $j++) { 
		echo $j;
	}
	echo"<br>";
	}
	echo"<p></p>";
for ($i=5; $i>=1  ; $i--) {
	for ($j=5; $j>=$i ; $j--) { 
		echo $j;
	}
	echo"<br>";
	}
for ($i=1; $i<=5  ; $i++) {
	for ($j=5; $j>=$i ; $j--) { 
		echo $j;
	}
	echo"<br>";
	}
?>
</body>
</html>