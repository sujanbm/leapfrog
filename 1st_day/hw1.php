<!DOCTYPE html>

<html>
<head><style>
table {
    border: 2px solid black;
}
td{
	color:white;
	background-color: #311919;
}
</style></head>
<body>

<?php
 for($i=1;$i<=10;$i++){
	?><table bordercolor="red" bgcolor="#311919">
	<?php for($j=1;$j<=10;$j++){
		?>
		
		<tr>
			<td><?=$i?></td> <td>*</td> <td><?=$j?></td> <td>=</td> <td><?=$j*$i?></td>
		</tr>
		
	
		<?php
	}?>
	</table>
<p></p>
<?php
}
?>
</body>
</html>