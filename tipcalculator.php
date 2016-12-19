<!DOCTYPE html>
<html>
<head>
	<title>Tip Calculator</title>
</head>
<body>
	<form action="tipcalculator.php">
		<label>Bill subtotal: $</label>
		<input type="number" name="bill">
		<br>
		<label>Tip Percentage:</label>
		<input type="radio" name="tippercent" value =10>
		<label>10%</label>
		<input type="radio" name="tippercent" value =15>
		<label>15%</label>
		<input type="radio" name="tippercent" value =20>
		<label>20%</label>
		<button type="submit" name="submit" value="submit">Submit</button>
	</form>
	<br>
	<?php
		if (isset($_GET['submit'])){
				$result = $_GET['bill'] * $_GET['tippercent'] / 100; 
				echo "The required tip is: ";
				echo $result;
		}
		else
		{
				echo "Enter a valid value ";
		}
	?>
</body>
</html>