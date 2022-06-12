


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

		$x = 23;	// Change Number here
		$c = 23;	// Change Number here
		$z = 23;	// Change Number here

		echo "Find the Largest number between three Numbers. <br> <br>";


			if ($x > $c && $x > $z) {

				echo "X is big = " .$x. ".";

			} 
			elseif ($c > $x && $c > $z) {

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

		$x = 43;	// Change Number here
		$i = 43;	// Change Number here

		echo "Find the Largest number between two Numbers. <br> <br>";


			if ($x>$i) {

				echo "X = " .$x. "is big";

			}elseif ($x<$i) {

				echo "I = " .$i. "is big";

			} else {

				echo "X = " .$x. " & I = " .$i. " Both numbers are SAME.";				
			}


	?>


		<br>
		<br>



		<!--	find the largest number between three numbers or same number using if...elif...else	-->


	<?php 


		$x = 3;		// Change Number here
		$r = 3;		// Change Number here
		$t = 3;		// Change Number here

		echo "Find the Largest number between three Numbers. <br> <br>";


			if($x>$r && $x>$t){

				echo "X = " .$x. " is Big.";
			}

			elseif ($r>$x && $r>$t){

				echo "R = " .$r. " is Big.";

			}elseif ($t>$x && $t>$r){

				echo "T = " .$t. " is Big.";

			} else {

				echo "X = " .$x. ", R = " .$r. ", T = " .$t.  " All are SAME.";

			}

			
	?>



	<br>
	<br>


	<!--	find the SMALLEST number between three numbers or same number using if...elif...else	-->


	<?php 

		$x = 3;		// Change Number here
		$r = 3;		// Change Number here
		$t = 3;		// Change Number here

		print "Find the SMALLEST number between three Numbers. <br> <br>";

				if($x < $r && $x < $t){

					print "X = " .$x. " is SMALL.";

				}
				elseif ($r < $x && $r < $t){

					print "X = " .$x. " is SMALL.";

				}
				elseif ($t < $x && $t < $r){

					print "X = " .$x. " is SMALL.";

				}
				else{

					print "X = " .$x. ", R = " .$r. ", T = " .$t.  " All are SAME.";
				}


	?>
	
	
	
	<br>
	<br>
	
	
	
	<!--	 GPA Calculator	using if...elif...else		-->

	<?php 


		echo "GPA Calculator","<br><br>";


		$marks= 67; 	// Change Grade Number here

			if ($marks >= 80 && $marks <= 100) {

				echo "Grade A+";

			}elseif ($marks >= 70 && $marks <= 79) {

				echo "Grade A";

			}elseif ($marks >= 60 && $marks <= 69) {

				echo "Grade A-";

			}elseif ($marks >= 50 && $marks <= 59) {

				echo "Grade B";

			}elseif ($marks >= 40 && $marks <= 49) {

				echo "Grade C";

			}elseif ($marks >= 33 && $marks <= 39) {

				echo "Grade D";

			}elseif ($marks >=  0 && $marks <= 32) {

				echo "Grade F";

			} else {

				echo "Invalid";

			}



	?>

		
		

</body>
</html>








