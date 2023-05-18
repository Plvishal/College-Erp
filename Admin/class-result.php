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


	<!-- title of this page -->
		<title>Admin - Class Result</title>
		

		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>Result Management System </h4>
					<a class="btn btn-outline-primary ml-auto mr-2 text-white" href="add-single-student-results.php">Single Student Result</a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12">
							<h5 class="py-2 pl-3 <?php echo $bg_color; ?>">
								
							</h5>
						</div>
						<form action="class-result.php" method="get">
							<div class="row mt-3">
								<div class="col-md-4">
									<div class="form-group" style="z-index: 10;">
										<label>Select Course:</label>
										<select class="browser-default custom-select" name="course_code">
											<option value="">Select Course</option>
											<?php
											$query="select course_code from courses";
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
											echo	"<option value=".$row['semester']." ".($row['semester'] == $_GET['semester'] ? ' selected ' : '')." >".$row['semester']."</option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Select Subject:</label>
										<div class="d-flex">
											<select class="browser-default custom-select" name="subject_code" required="">
												<option value="">Select Subject</option>
												<?php
													$query="select subject_code,subject_name from course_subjects";
													$run=mysqli_query($con,$query);
													while($row=mysqli_fetch_array($run)) {
													echo	"<option value=".$row['subject_code']." ".($row['subject_code'] == $_GET['subject_code'] ? ' selected ' : '')." >".$row['subject_name']."</option>";
													}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<input type="reset" onclick="window.location.href='class-result.php'" class="btn btn-warning px-5" value="Reset"/>
									<button type="submit" class="btn btn-primary px-5">Search</button>
								</div>
							</div>	
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
					<?php include('class-result-table.php') ?>
					</div>
				</div>
			</div>
		</main>
</body>
</html>

