<html>
<head></head>
<body>
	<?php 
	$contents = array('name' => "Sujan", 'address' => "Nayabazar", 'college'=>"ACEM", 'id'=>"573");
		?>
<form action="hw2.php" method="post">
	Name: <input type="text" name="Name">
	<br>
	<input type="submit" value="check" name="Submit">
</form>
<?php
if(isset($_POST['Submit']))
{
	$name=$_POST['Name'];	
	foreach ($contents as $key => $value) {
		if($name==strtolower($contents['name'])){
			echo $key."=". $value."<br>";
			
		}
		else{
			echo "name not found";
			break;
		}
			
	}
}
?>
</body>
</html>