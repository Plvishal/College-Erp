<?php
require_once "../connection/connection.php";
if (isset($_POST['sub'])) {
 	$roll_no=$_POST['roll_no'];
 	$amount=$_POST['amount'];
 	$status=$_POST['status'];
		$que="insert into student_fee(roll_no,amount,status)values('$roll_no','$amount','$status')";
	$run=mysqli_query($con,$que);
	if ($run) {
        echo "<script>window.location.href='student-fee.php';alert('Your Fee has been submitted.')</script>";
    }
    else {
        echo "<script>window.location.href='student-fee.php';alert('Your Fee has not been submitted.')</script>";
    }
	}

?>