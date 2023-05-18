<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
	?>
<!---------------- Session Ends form here ------------------------>



<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Student Attendance</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>Student Attendance Management System </h4>
				</div>
				<div class="row w-100">
					<div class="col-md-12">
						<form action="student-attendance.php" method="get">
							<div class="row mt-3">
								<div class="col-md-4">
									<div class="form-group" style="z-index: 10;">
										<label>Enter Class Id:</label>
										<select class="browser-default custom-select" name="course_code">
											<option >Select Course</option>
											<?php
											$teacher_id=$_SESSION['teacher_id'];
											$query="select distinct(course_code) as course_code from time_table";
											$run=mysqli_query($con,$query);
											while($row=mysqli_fetch_array($run)) {
												echo	"<option value=".$row['course_code']." ".($row['course_code'] == $_GET['course_code'] ? ' selected ' : '').">".$row['course_code']."</option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									<label for="exampleInputEmail1">Select Semester:</label>
										<select class="browser-default custom-select" name="semester">
											<option value="">Select Semester</option>
											<?php
											$teacher_id=$_SESSION['teacher_id'];
											$query="select distinct(semester) as semester from course_subjects";
											$run=mysqli_query($con,$query);
											while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['semester']." ".($row['semester'] == $_GET['semester'] ? ' selected ' : '').">".$row['semester']."</option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Enter Subject:</label>
										<select class="browser-default custom-select" name="subject_code" required="">
											<option value="">Select Subject</option>
											<?php
											$teacher_id=$_SESSION['teacher_id'];
											$query="select subject_code from time_table";
											$run=mysqli_query($con,$query);
											while($row=mysqli_fetch_array($run)) {
												echo	"<option value=".$row['subject_code']." ".($row['subject_code'] == $_GET['subject_code'] ? ' selected ' : '').">".$row['subject_code']."</option>";
											}
										?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<input type="reset" onclick="window.location.href='student-attendance.php'" class="btn btn-warning px-5" value="Reset"/>
									<input type="submit" name="submit" class="btn btn-primary px-5" value="Search">
								</div>
							</div>	
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<?php include('student-attendance-table.php') ?>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

 