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
		<title>Admin - Student Fee</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>Student Fee Management System </h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="student-fee.php" method="get">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										<label>Enter Roll No:</label>
										<div class="d-flex">
											<input type="text" class="form-control" name="roll_no" placeholder="Enter Roll No">
			
										</div>
									</div>
								</div>
								<div class="col-md-6 align-items-baseline pt-4">
								</div>
							</div>
							<div class="col-md-12">
									<input type="reset" onclick="window.location.href='student-fee.php'" class="btn btn-warning px-5" value="Reset"/>
									<input type="submit" name="submit" class="btn btn-primary px-5" value="Search">
							</div>	
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
					<?php include('student-fee-table.php') ?>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

