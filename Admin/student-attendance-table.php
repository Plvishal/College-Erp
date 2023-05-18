                        <section class="border mt-3">
                        <form action="student-attendance-code.php" method="post">
							<table class="w-100 table-elements table-three-tr" cellpadding="3">
								<tr class="table-tr-head table-three text-white">
									<th>Sr.No</th>
									<th>Roll No</th>
									<th>Course Name</th>
									<th>Subject Name</th>
									<th>Semester</th>
									<th>Student Name</th>
									<th>Present/Absent</th>
									<th>Percentage</th>
									<th>Add Attendance</th>
								</tr>
								<?php  
								$i=1;
								$count=0;
									$conn=mysqli_connect("localhost","root","","college1");

                                    $course_code=@$_GET['course_code'];
                                    $semester=@$_GET['semester'];
                                    $subject_code=@$_GET['subject_code'];
									if(!empty($course_code) && !empty($semester) && !empty($subject_code)) {


										$que="select student_info.roll_no,first_name,middle_name,last_name,student_courses.semester,student_courses.course_code,subject_code from student_courses inner join student_info on student_info.roll_no=student_courses.roll_no where student_courses.course_code='$course_code' and student_courses.semester='$semester' and student_courses.subject_code='$subject_code'";
									    $run=mysqli_query($conn,$que);
                                        while ($row=mysqli_fetch_array($run)) {
                                            $count++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <?php $roll_no=$row['roll_no']; ?>
                                                <td><?php echo $row['roll_no'] ?></td>
                                                <input type="hidden" name="roll_no[]" value=<?php echo $row['roll_no'] ?> >
                                                <td><?php echo $row['course_code'] ?></td>
                                                <input type="hidden" name="course_code[]" value=<?php echo $row['course_code'] ?> >
                                                <td><?php echo $row['subject_code'] ?></td>
                                                <input type="hidden" name="subject_code[]" value=<?php echo $row['subject_code'] ?> >
                                                <td><?php echo $row['semester'] ?></td>
                                                <input type="hidden" name="semester[]" value=<?php echo $row['semester'] ?> >
                                                <td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></td>
                                                <?php  
                                                    $query1="select count(attendance_id) as attendance_id,sum(attendance) as attendance from student_attendance where student_id='$roll_no' and subject_code='$subject_code'";
                                                    $run1=mysqli_query($con,$query1); 
                                                    while ($row1=mysqli_fetch_array($run1)) { ?>
                                                <td class="text-center"><?php echo $row1['attendance']."/".($row1['attendance_id']-$row1['attendance']) ?></td>
                                                <td><?php echo $row1['attendance_id'] > 0 ? round(($row1['attendance']*100)/$row1['attendance_id'])."%" : "0" ?></td>
                                            <?php 	}
                                                ?>
                                                <td>Present<input type="checkbox" name="attendance[]" value="1">Absent<input type="checkbox" name="attendance[]" value="0" ></td>
                                                <input type="hidden" name="count" value="<?php echo $count ?>">
                                            </tr>
                                            
                                            <?php		
                                        }
									}
								?>
								
							</table>	
                            <div class="row pt-2">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <input type="submit" name="sub" class="btn btn-primary float-right" />
                                </div>
                            </div>			
						</section>