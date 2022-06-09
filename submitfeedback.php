 <?php
	
 
	require'config.php';
 
	$student_Name = $_POST['name'];
	$student_indexID = $_POST['indexno'];  
	$subject = $_POST['subject'];  	
	$grade = $_POST['gridRadios']; 
	$feedback = $_POST['feedback'];
	

	
	$sql ="INSERT INTO feedback (feedback_ID,student_Name,index_ID,subject,grade,feedback)
			VALUES('','$student_Name','$student_indexID','$subject','$grade','$feedback')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('feedback inserted successfully')</script>";
	 header("location:parent-dashboard.php");

 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
	?>