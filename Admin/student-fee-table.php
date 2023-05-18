                            <section class="border mt-3">
                            <form action="student-fee.php" method="post">
							<table class="w-100 table-elements table-three-tr" cellpadding="3">
								<tr class="table-tr-head table-three text-white">
									<th>Sr No.</th>
									<th>Roll No.</th>
									<th>Student Name</th>
									<th>Program</th>
									<th>Amount (Rs.)</th>
								</tr>
								<?php  
								$i=1;
                                $roll_no=@$_GET['roll_no'];
                                if(!empty($roll_no)) {


										$que="select roll_no,first_name,middle_name,last_name,course_code from student_info where roll_no='$roll_no' ";
									$run=mysqli_query($con,$que);
									while ($row=mysqli_fetch_array($run)) {
									?>
										<tr>
											<td><?php echo $i++ ?></td>
											<td><?php echo $row['roll_no'] ?></td>
											<input type="hidden" name="roll_no" value=<?php echo $row['roll_no'] ?> >
											<td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></td>
											<td><?php echo $row['course_code'] ?></td>
											<td><input type="text" name="amount" class="form-control" placeholder="Enter Amount for fee"></td>
											<input type="hidden" name="status" value="Paid">

										</tr>
										
								<?php		
									}
									}
								?>
								<div class="row pt-2">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <input type="submit" name="sub" class="btn btn-primary float-right" />
                                </div>	
								</form>
							</table>				
						</section>