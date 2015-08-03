<html>
<head></head>
<body>
	<?php 
	$contents = array('name' => "Sujan", 'address' => "Nayabazar", 'college'=>"ACEM", 'id'=>573);
	$name="Sujan";
	foreach ($contents as $key => $value) {
		if($name==strtolower($contents['name'])){
		echo $key."=". $value."<br>";
		}
		else{
			echo "name not found";
			break;
		}
			
	}
	?>
</body>
</html>