<html>
<head>
</head>
<body>
<?php
$array1=array(10,20,30,40,50);
$array2 = array(2,3,4,5,6);
for ($i=0; $i < count($array1) ; $i++) {
	echo "array1[".$i ."] * array2[".$i ."] = ". $array1[$i]*$array2[$i] ."<br>";
	echo "array1[".$i ."] + array2[".$i ."] = ". ($array1[$i]+$array2[$i]) ."<br>";
}
for ($i=0; $i < count($array1) ; $i++) { 
	for ($j=0; $j < count($array2) ; $j++) { 
		echo "array1[".$i ."] * array2[".$j ."] = ". $array1[$i]*$array2[$j] ."<br>";
		echo "array1[".$i ."] + array2[".$j ."] = ". ($array1[$i]+$array2[$j]) ."<br>";
	}
}
?>
</body>
</html>