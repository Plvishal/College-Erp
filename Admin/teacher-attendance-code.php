<?php
require_once "../connection/connection.php";
if (isset($_POST['sub'])) {
	$teacher_id=@$_POST['teacher_id'];
	$attendance=@$_POST['attendance'];
	$date=date("d-m-y");

		$que="insert into teacher_attendance(teacher_id,attendance,attendance_date)values('$teacher_id','$attendance','$date')";
	$run=mysqli_query($con,$que);
	if ($run) {
        echo "<script>window.location.href='teacher-attendance.php';alert('Your Attendance has been submitted.')</script>";
    }
    else {
        echo "<script>window.location.href='teacher-attendance.php';alert('Your Attandance has not been submitted.')</script>";
    }
	}
?>