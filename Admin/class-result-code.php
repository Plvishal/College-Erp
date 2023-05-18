<?php
    require_once "../connection/connection.php";
	$message = "";
	$success_message = "";
	$error_message = "";
	if (isset($_POST['sub'])) {
		$count=$_POST['count'];
		for ($i=0; $i < $count; $i++) { 
			$date=date("d-m-y");
			$que="insert into class_result(roll_no,course_code,subject_code,semester,total_marks,obtain_marks,result_date)values('".$_POST['roll_no'][$i]."','".$_POST['course_code'][$i]."','".$_POST['subject_code'][$i]."','".$_POST['semester'][$i]."','".$_POST['total_marks'][$i]."','".$_POST['obtain_marks'][$i]."','$date')";
			$run=mysqli_query($con,$que);
            if ($run) {
                echo "<script>window.location.href='class-result.php';alert('All Results Has Been Submitted Successfully.')</script>";
            }
            else {
                echo "<script>window.location.href='class-result.php';alert('All Results Has Not Been Submitted Successfully.')</script>";
            }
		}
	}

?>