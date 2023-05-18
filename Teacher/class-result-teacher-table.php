<section class="mt-3">
    <form action="class-result-teacher-code.php" method="post">
							<table class="w-100 table-elements mb-5 table-three-tr"cellpadding="5" >
								<tr class="table-tr-head text-white table-three">
									<th>Sr.No</th>
									<th>Roll No</th>
									<th>Cource Name</th>
									<th>Subject Name</th>
									<th>Semester</th>
									<th>Student Name</th>
									<th>Total Marks</th>
									<th>Obtain Marks</th>
								</tr>
								<?php  
								$i=1;
								$count=0;
                                $course_code=@$_GET['course_code'];
                                $semester=@$_GET['semester'];
                                $subject_code=@$_GET['subject_code'];
                                
                                if(!empty($course_code) && !empty($semester) && !empty($subject_code)) { 
                                      

										$que="select student_info.roll_no,first_name,middle_name,last_name,student_courses.semester,student_courses.course_code,subject_code from student_courses inner join student_info on student_info.roll_no=student_courses.roll_no where student_courses.course_code='$course_code' and student_courses.semester='$semester' and student_courses.subject_code='$subject_code'";
									$run=mysqli_query($con,$que);
									while ($row=mysqli_fetch_array($run)) {
										$count++;
									?>
										<tr>
											<td><?php echo $i++ ?></td>
											<td><?php echo $row['roll_no'] ?></td>
											<input type="hidden" name="roll_no[]" value=<?php echo $row['roll_no'] ?> >
											<td><?php echo $row['course_code'] ?></td>
											<input type="hidden" name="course_code[]" value=<?php echo $row['course_code'] ?> >
											<td><?php echo $row['subject_code'] ?></td>
											<input type="hidden" name="subject_code[]" value=<?php echo $row['subject_code'] ?> >
											<td><?php echo $row['semester'] ?></td>
											<input type="hidden" name="semester[]" value=<?php echo $row['semester'] ?> >
											<td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></td>
											<td class="text-center"><?php echo "100" ?></td>
											<input type="hidden" name="total_marks[]" value="100" >
											<td><input type="text" name="obtain_marks[]" placeholder="Plz Enter Obtain Marks" class="form-control"></td>
											<input type="hidden" name="count" value="<?php echo $count ?>">
											
										</tr>
										
								<?php		
									}
									}
								?>
								 <div class="row pt-2">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <input type="submit" name="sub" class="btn btn-primary float-right" />

								</form>
							</table>				
						</section>