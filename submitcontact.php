 <?php
	
 
	require'config.php';
 
	$name = $_POST['name'];
	$email = $_POST['email'];  
	$subject = $_POST['subject'];  	
	$message = $_POST['message']; 
	
	
	$sql ="INSERT INTO payment (contact_id,name,email,subject,message)
			VALUES('','$name','$email','$subject','$message')";
 
if($con -> query($sql)) 
 {
	 echo "<script>alert('payment inserted successfully')</script>";
	 header("location:parent-dashboard.php");

 }
 else
 {
	 echo "<script>alert('error')</script>";
 }
 


		$con-> close();
	?>