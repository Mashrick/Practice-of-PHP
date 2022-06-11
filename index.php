


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practice</title>
</head>
<body>


		<!--	find the largest number between three numbers using if...elif...else	-->

	<?php 

		$x = 23;
		$c = 6;
		$z = 3;


			if ($x>$c && $x>$z) {
				echo "X is big = " .$x. ".";
			} 
			elseif ($c>$x && $c>$z) {
				echo "C is big = " .$c. ".";
			}
			else {
				echo "Z is big = " .$z. ".";
			}
		


	?>


	<br>
	<br>

		<!--	find the largest number between Two numbers using if...elif...else	-->

	<?php 

		$x = 43;
		$i = 43;

			if ($x>$i) {

				echo "X = " .$x. "is big";

			}elseif ($x<$i) {

				echo "I = " .$i. "is big";

			} else {

				echo "X = " .$x. " & I = " .$i. " Both numbers are SAME.";				
			}


	?>

		
		

</body>
</html>





