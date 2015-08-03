<html>
<head>
</head>
<body>
<?php
$array1=array(10,20,30,40,50);
$array2 = array(2,3,4,5,6);
echo "Addition of array1 and array2<br>";
for ($i=0; $i < count($array1) ; $i++) {
	$sum=$array1[$i]+$array2[$i] ."<br>";
	echo $array1[$i] ."+". $array2[$i] ."=". $sum;
}
echo "Multiplication of array1 and array2<br>";
for ($i=0; $i < count($array1) ; $i++) {
	$prod=$array1[$i]*$array2[$i] ."<br>";
	echo $array1[$i] ."+". $array2[$i] ."=". $prod;
}

	
	$product=1;
	$sum=0;
	echo "Sum and Product of Array 1 and Array2<br>";
for ($i=0; $i < count($array1) ; $i++) { 
	$sum = $sum + $array1[$i];
	$product = $product * $array1[$i];
	}
	echo "sum =".$sum ." product = ". $product ."<br>";
	$product=1;
	$sum=0;
for ($i=0; $i < count($array2) ; $i++) { 
	$sum = $sum + $array2[$i];
	$product = $product * $array2[$i];
	}
	echo "sum =".$sum ." product =". $product;
?>
</body>
</html>