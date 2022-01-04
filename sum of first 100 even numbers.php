<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sum of first 100 even numbers</title>
</head>
<body>
	<h2>PHP Program to make the sum of first 100 even numbers.</h2>
	<?php

	$sum=0;
	for($i=1; $i<200; $i++)
	{
		if($i%2==0)
		{
			$sum+=$i;
			print "<br /> $i $sum";
		}
	}

	?>
</body>
</html>