<?php 
    require_once "../connection/connection.php";
 	if (isset($_POST['btn_update'])) {

 		echo $course_code=$_POST["course_code"];

 		echo $semester=$_POST["semester"];

 		echo $timing_from=$_POST["timing_from"];
 		
 		echo $timing_to=$_POST["timing_to"];
 		
 		echo $day=$_POST["day"];
 		
 		echo $subject_code=$_POST["subject_code"];

 		echo $room_no=$_POST["room_no"];

 		$query1="update time_table set course_code='$course_code',semester='$semester',timing_from='$timing_from',timing_to='$timing_to',day='$day',subject_code='$subject_code',room_no='$room_no' where subject_code='$subject_code'";
 		$run1=mysqli_query($con, $query1);
 		if ($run && $run1) {
            echo "<script>window.location.href='teacher.php';alert('Your Data has been submitted.')</script>";
        }
        else {
            echo "<script>window.location.href='teacher.php';alert('Your Data has not been submitted.')</script>";
        }
 	}
?>