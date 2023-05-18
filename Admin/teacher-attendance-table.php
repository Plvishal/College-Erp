                            <section class="border mt-3">
                            <form action="teacher-attendance-code.php" method="post">
							<table class="w-100 table-elements table-three-tr" cellpadding="3">
									<tr class="table-tr-head table-three text-white">
									<!-- Default checked -->
									<th>Sr.No</th>
									<th>Teacher ID</th>
									<th>Teacher Name</th>
									<th>Present</th>
									<th>Absent</th>
									<th>Working Days</th>
									<th>Attendance Per</th>
									<th>Add Attendance</th>
								</tr>
								<?php  
								$i=1;
									$conn=mysqli_connect("localhost","root","","college1");

                                    $teacher_id=@$_GET['teacher_id'];
									if(!empty($teacher_id)) {

										$que="select teacher_id,first_name,middle_name,last_name from teacher_info where teacher_id='$teacher_id' ";
                                        $run=mysqli_query($con,$que);
                                        while ($row=mysqli_fetch_array($run)) {
                                            ?>
                                         <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $row['teacher_id'] ?></td>
                                                <input type="hidden" name="teacher_id" value=<?php echo $row['teacher_id'] ?> >
                                                <td><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"] ?></td>
                                                <td><?php echo 1 ?></td>
                                                <td><?php echo 1 ?></td>
                                                <td class="text-center"><?php echo "1/1" ?></td>
                                                <td><?php echo "50% of 100%" ?></td>
                                                <td>Present<input type="checkbox" name="attendance" value="1">Absent<input type="checkbox" name="attendance" value="0" ></td>
                                            </tr>
                                          <?php      
                                        }
                                    }
                                    ?>
								

								</form>
							</table>
                            <div class="row pt-2">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <input type="submit" name="sub" class="btn btn-primary float-right" />
                                </div>				
						</section>