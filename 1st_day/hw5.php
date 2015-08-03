<html>
<head>
</head>
<body>
<table>
	<form action="hw5.php" method="post">
		<tr><td>English</td>  <td><input type="integer" name="English" value=""></td></tr><br>
		<tr><td>Nepali</td>  <td><input type="integer" name="Nepali" value=""></td></tr><br>
		<tr><td>Social</td>  <td><input type="integer" name="Social" value=""></td></tr><br>
		<tr><td>Maths</td>  <td><input type="integer" name="Maths" value=""></td></tr><br>
		<tr><td>EPH</td>  <td><input type="integer" name="EPH" value=""></td></tr><br>
		<tr><td>Science</td>  <td><input type="integer" name="Science" value=""></td></tr><br>
		<tr><td>Opt1</td>  <td><input type="integer" name="Opt1" value=""></td></tr><br>
		<tr><td>Opt2</td>  <td><input type="integer" name="Opt2" value=""></td></tr><br>
		<tr><td><input type="submit" name="submit"></td></tr>
	</form>
</table>
<p></p>
<?php
if(isset($_POST['submit'])){
	$english=$_POST['English'];
	$nepali=$_POST['Nepali'];
	$social=$_POST['Social'];
	$maths=$_POST['Maths'];
	$eph=$_POST['EPH'];
	$science=$_POST['Science'];
	$opt1=$_POST['Opt1'];
	$opt2=$_POST['Opt2'];
	$percentage=($english+$nepali+$social+$maths+$eph+$science+$opt1+$opt2)/8;
	
	if($percentage>32&&$percentage<50)
		echo "Third Divison ". $percentage."<br>";
	elseif ($percentage>50&&$percentage<60)
		echo "Second Divison ". $percentage."<br>";
	elseif ($percentage>60&&$percentage<80)
		echo "First Divison ". $percentage."<br>";
	elseif ($percentage>80)
		echo "Distinction ".$percentage."<br>";
	else
		echo "Fail ".$percentage."<br>";
	}
?>
</body>
</html>