<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pattern</title>
</head>
<body>
	<h2>PHP Program to print the pattern.</h2>

	<?php

	for($i=0; $i<7; $i++)
	{
		for($j=0; $j<$i; $j++)
		{
			if(($i+$j)%2==0)
			{
				printf("0");
			}
			else
			{
				printf("1");
			}
		}
		print "<br />";
	}

	?>
</body>
</html>