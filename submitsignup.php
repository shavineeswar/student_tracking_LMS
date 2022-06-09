<?php

require 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];



$sql="INSERT INTO persons(UserID,Email,Username,Password,Name) 
	 VALUES('','$email','$username','$password','$name')";
	
	if($con->query($sql))
		//if(mysqli_query ($con,$sql)) 
	{
		echo"<script>alert('Record inserted successfully')</script>";
		header("Location:pages-login.php");
	}
	else
	{
		echo"<script>alert('Error y')</script>";
	}
	
	$sql2="SELECT * FROM persons";
	$result=$con->query($sql2);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo $row["Username"]."-" .$row["Password"]."<br>";
		}
	}
	else
	{
			echo"No result";
	}
	
	
	
	// close the connection 

		$con->close();
?>