<!--*********************** PHP code starts from here for data insertion into database ******************************* -->
<?php 
     require_once "../connection/connection.php";
 	if (isset($_POST['btn_save'])) {

 		$course_code=$_POST["course_code"];

 		$semester=$_POST["semester"];

 		$timing_from=$_POST["timing_from"];
 		
 		$timing_to=$_POST["timing_to"];
 		
 		$day=$_POST["day"];
 		
 		$subject_code=$_POST["subject_code"];

 		$room_no=$_POST["room_no"];
 		
 		$query="insert into time_table(course_code,semester,timing_from,timing_to,day,subject_code,room_no)values('$course_code','$semester','$timing_from','$timing_to','$day','$subject_code','$room_no')";
 		$run2=mysqli_query($con, $query);
 		if ($run2) {
            echo "<script>window.location.href='time-table.php';alert('Your Data has been submitted.')</script>";
        }
        else {
            echo "<script>window.location.href='time-table.php';alert('Your Data has not been submitted.')</script>";
        }
 	}
?>


<!--*********************** PHP code end from here for data insertion into database ******************************* -->
