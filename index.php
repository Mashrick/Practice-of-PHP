


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

		$x = 23;	// 	change number here
		$c = 6;		// 	change number here
		$z = 3;		// 	change number here


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

		$x = 43;	// 	change number here
		$i = 43;	// 	change number here

			if ($x>$i) {

				echo "X = " .$x. "is big";

			}elseif ($x<$i) {

				echo "I = " .$i. "is big";

			} else {

				echo "X = " .$x. " & I = " .$i. " Both numbers are SAME.";				
			}


	?>
	
	
	
	<!--	find the largest number between three numbers or same number using if...elif...else	-->


	<?php 

		$x = 3;		// 	change number here
		$r = 3;		// 	change number here
		$t = 3;		// 	change number here


			if($x>$r && $x>$t){

				echo "X = " .$x. " is Big.";

			}elseif ($r>$x && $r>$t)
			{
				echo "R = " .$r. " is Big.";

			}elseif ($t>$x && $t>$r)

			{
				echo "T = " .$t. " is Big.";

			} else {

				echo "X = " .$x. ", R = " .$r. ", T = " .$t.  " All are SAME.";

			}

			
	?>
	

		
		

</body>
</html>





