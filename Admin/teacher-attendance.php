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
		<title>Admin - Teacher Attendance</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>Teacher Attendance Management System </h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="teacher-attendance.php" method="get">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										<label>Enter Teacher Id:</label>
										<div class="d-flex">
											<input type="text" class="form-control" name="teacher_id" placeholder="Enter Teacher I'd">
											<!-- <input type="submit" name="submit" class="btn btn-primary px-4 ml-4" value="Search"> -->
										</div>		
									</div>
								</div>
							</div>	
							<div class="col-md-12">
									<input type="reset" onclick="window.location.href='teacher-attendance.php'" class="btn btn-warning px-5" value="Reset"/>
									<input type="submit" name="submit" class="btn btn-primary px-5" value="Search">
							</div>
						</form>
					</div>
				</div>
				<div class="row w-100">
					<div class="col-md-12 ml-2">
					<?php include('teacher-attendance-table.php') ?>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

