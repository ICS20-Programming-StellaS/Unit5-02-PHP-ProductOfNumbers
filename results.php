<?php  
  // get the numbers from the text fields
	$userNum1 = $_POST["userNum1"];
	$userNum2 = $_POST["userNum2"];
  // counter
  $counter = 1;
  $sum = 0;
	// use a while loop to display the numbers from user min number up to the user max number
	for ($counter = 1; $counter <= $userNum2; $counter++) {
		$sum = $sum + $userNum1;
	} 	

 $sum = number_format($sum, 2);

 echo $sum;
?>