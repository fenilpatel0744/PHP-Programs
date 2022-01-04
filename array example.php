<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Example</title>
</head>
<body>
	<h2>Array Example</h2>
	<?php

	$shopping = array (array(array("Banana",30),array("Orange",70),),
						array(array("Sugar",35),array("Oil",100),),
						array(array("Chair",120),array("Table",80))
					);
	print"<ul>";
	for($phase=0; $phase<3; $phase++)
	{
		echo "<li>The phase number $phase";
		echo"<ul>";

		for($row=0; $row<2; $row++)
		{
			echo "<li>The row number $row";
			echo"<ul>";

			for($col=0; $col<2; $col++)
			{
				echo "<li>" .$shopping[$phase][$row][$col]. "</li>";
			}

			echo "</ul>";
			echo "</li>";
		}

		echo "</ul>";
		echo "</li>";
	
	}
	
	print "</ul>";

	?>
</body>
</html>