
<?php  
	require_once "../connection/connection.php";
	if (isset($_POST['btn_save2'])) {
		$course_code=$_POST['course_code'];

		$semester=$_POST['semester'];

		$teacher_id=$_POST['teacher_id'];

		$subject_code=$_POST['subject_code'];

		$total_classes=$_POST['total_classes'];

		$date=date("d-m-y");

		$query3="insert into teacher_courses(course_code,semester,teacher_id,subject_code,assign_date,total_classes)values('$course_code','$semester','$teacher_id','$subject_code','$date','$total_classes')";
		$run3=mysqli_query($con,$query3);
		if ($run3) {
 			echo "<script>window.location.href='teacher.php';alert('Your Data has been submitted.')</script>";
 		}
 		else {
 			echo "<script>window.location.href='teacher.php';alert('Your Data has not been submitted.')</script>";
 		}


	}
?>
<!--*********************** PHP code end from here for data insertion into database ******************************* -->