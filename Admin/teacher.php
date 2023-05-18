<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
		$_SESSION['LoginTeacher']="";
	?>
<!---------------- Session Ends form here ------------------------>

 

<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Register Teacher</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">Teacher Management System </h4>
						<button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".bd-example-modal-lg">Add Teacher</button>
					</div>
				</div>
				<div class="row w-100">
					<div class=" col-lg-6 col-md-6 col-sm-12 mt-1 ">
						<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header bg-info text-white">
										<h4 class="modal-title text-center">Add New Teacher</h4>
									</div>
									<div class="modal-body">
										<form action="teacher-register-code.php" method="post" enctype="multipart/form-data">
											<div class="row mt-3">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">First Name: </label>
														<input type="text" name="first_name" class="form-control" required="" placeholder="First Name">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Middle Name: </label>
														<input type="text" name="middle_name" class="form-control"  placeholder="Middle Name">
													</div>
												</div><div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Last Name: </label>
														<input type="text" name="last_name" class="form-control" required="" placeholder="Last Name">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Teacher Email:</label>
														<input type="text" name="email" class="form-control" required="" placeholder="Enter Email">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Mobile No</label>
														<input type="number" name="phone_no" class="form-control"placeholder="Enter Mobile Number">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Select Your Profile </label>
														<input type="file" name="profile_image" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Teacher Status: </label>
														<select class="browser-default custom-select" name="teacher_status">
															<option selected>Select Status</option>
															<option value="Permanent">Permanent</option>
															<option value="Contract">Contract</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Application Status:</label>
														<select class="browser-default custom-select" name="application_status">
															<option >Select Status</option>
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Aadhar NO:</label>
														<input type="number" name="cnic" class="form-control" placeholder="XXXX-XXXX-XXXX">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Date of Birth: </label>
														<input type="date" name="dob" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">WhatsApp No:</label>
														<input type="number" name="other_phone" class="form-control" placeholder="XXXXX-XXXXX">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Gender:</label>
														<select class="browser-default custom-select" name="gender">
															<option selected>Select Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Permanent Address: </label>
														<input type="text" name="permanent_address" class="form-control" placeholder="Enter Permanent Address">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Current Address:</label>
														<input type="text" name="current_address" class="form-control" placeholder="Enter Current Address">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Place of Birth:</label>
														<input type="text" name="place_of_birth" class="form-control" placeholder="Enter Place of Birth">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Matric/Started Date: </label>
														<input type="date" name="matric_complition_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Matric/Awarded Date:</label>
														<input type="date" name="matric_awarded_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Upload Matric Certificate:</label>
														<input type="file" name="matric_certificate" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Intermediate/Started Date: </label>
														<input type="date" name="fa_complition_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Intermediate/Awarded Date:</label>
														<input type="date" name="fa_awarded_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Upload Intermediate Certificate:</label>
														<input type="file" name="fa_certificate" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">B.Tech/Started Date: </label>
														<input type="date" name="ba_complition_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">B.Tech/Awarded Date:</label>
														<input type="date" name="ba_awarded_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Upload B.Tech Certificate:</label>
														<input type="file" name="ba_certificate" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">M.Tech/Started Date: </label>
														<input type="date" name="ma_complition_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">M.Tech/Awarded Date:</label>
														<input type="date" name="ma_awarded_date" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="formp">
														<label for="exampleInputPassword1">Upload M.Tech Certificate:</label>
														<input type="file" name="ma_certificate" class="form-control">
													</div>
												</div>
											</div>
											<!-- _________________________________________________________________________________
																				Hidden Values are here
											_________________________________________________________________________________ -->
											<div>
												<input type="hidden" name="password" value="teacher123*">
												<input type="hidden" name="role" value="Teacher">
											</div>
											<!-- _________________________________________________________________________________
																				Hidden Values are end here
											_________________________________________________________________________________ -->
											<div class="modal-footer">
												<input type="submit" class="btn btn-primary" name="btn_save" value="Save Data">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row w-100">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<div class="row">
								<div class="col-md-3 offset-9 pt-5 mb-2">
									<!-- Large modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg1">Assign Subjects</button>
									<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header bg-info text-white">
													<h4 class="modal-title text-center">Assign Subjects To Teachers</h4>
												</div>
												<div class="modal-body">
													<form action="courses-add-code.php" method="POST" enctype="multipart/form-data">
														<div class="row mt-3">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputEmail1">Select Course:*</label>
																	<select class="browser-default custom-select" name="course_code" required="">
																		<option >Select Course</option>
																		<?php
																			$query="select distinct(course_code) from time_table";
																			$run=mysqli_query($con,$query);
																			while($row=mysqli_fetch_array($run)) {
																			echo	"<option value=".$row['course_code'].">".$row['course_code']."</option>";
																			}
																		?>
																	</select>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1" required>Enter Semester:*</label>
																	<input type="text" name="semester" class="form-control">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1">Enter Teacher Id:*</label>
																	<input type="text" name="teacher_id" class="form-control" required>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1">Please Select Subject:*</label>
																	<select class="browser-default custom-select" name="subject_code" required="">
																		<option >Select Subject</option>
																		<?php
																			$query="select subject_code from time_table";
																			$run=mysqli_query($con,$query);
																			while($row=mysqli_fetch_array($run)) {
																			echo	"<option value=".$row['subject_code'].">".$row['subject_code']."</option>";
																			}
																		?>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputPassword1">Enter Total Classes:*</label>
																	<input type="text" name="total_classes" class="form-control" required>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<input type="submit" class="btn btn-primary" name="btn_save2">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</form>
												</div>
											</div>
									</div>
									</div>
								</div>
							</div>
							<table class="w-100 table-elements mb-5 table-three-tr" cellpadding="10">
								<tr class="table-tr-head table-three text-white">
									<th>Sr. No</th>
									<th>Teacher Name</th>
									<th>Current Address</th>
									<th>Hire Date</th>
									<th>Email</th>
									<th>Operations</th>
								</tr>
								<?php 
								$query="select teacher_id,first_name,middle_name,last_name,current_address,ma_certificate,hire_date,email from teacher_info where status = 1";
								$run=mysqli_query($con,$query);
								$i = 0;
								while($row=mysqli_fetch_array($run)) {
									echo "<tr>";
									echo "<td>".(++$i)."</td>";
									echo "<td>".$row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]."</td>";
									echo "<td>".$row["current_address"]."</td>";
									echo "<td>".$row["hire_date"]."</td>";
									echo "<td>".$row["email"]."</td>";
									echo	"<td width='170'><a class='btn btn-primary' href=display-teacher.php?teacher_id=".$row['teacher_id'].">Profile</a> <a class='btn btn-danger'  onclick='return confirm(\"Are you sure?\")' href=delete-function.php?teacher_id=".$row['teacher_id'].">Delete</a></td>";
									echo "</tr>";
								}
								?>
							</table>				
						</section>
					</div>
				</div>	 	
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>


