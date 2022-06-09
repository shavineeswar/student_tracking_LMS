 <?php
	
 
	require'config.php';
 
	$student_Name = $_POST['first_name'];
	$student_indexID = $_POST['last_name'];  
	$gender = $_POST['gender'];  	
	$phone_No = $_POST['phone']; 
	$bank_Name = $_POST['bank'];
	$branch_Name = $_POST['branch'];
	$email = $_POST['email'];
	$acc_Name = $_POST['account_name'];
	$acc_Num = $_POST['account_number'];

	
	$sql ="INSERT INTO payment (payment_ID,student_Name,student_indexID,gender,phone_No,bank_Name,branch_Name,email,acc_Name,acc_Num)
			VALUES('','$student_Name','$student_indexID','$gender','$phone_No','$bank_Name','$branch_Name','$email','$acc_Name','$acc_Num')";
 
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