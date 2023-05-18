<?php
require_once "../connection/connection.php";
if (isset($_POST['sub'])) {
	$count=$_POST['count'];
	for ($i=0; $i < $count; $i++) {  
		$date=date("d-m-y");
		$que="insert into student_attendance(course_code,subject_code,semester,student_id,attendance,attendance_date)values('".$_POST['course_code'][$i]."','".$_POST['subject_code'][$i]."','".$_POST['semester'][$i]."','".$_POST['roll_no'][$i]."','".$_POST['attendance'][$i]."','$date')";
	$run=mysqli_query($con,$que);
    if ($run) {
        echo "<script>window.location.href='student-attendance.php';alert('Your Attendance has been submitted.')</script>";
    }
    else {
        echo "<script>window.location.href='student-attendance.php';alert('Your Attendance has not been submitted.')</script>";
    }
	}
}
?>