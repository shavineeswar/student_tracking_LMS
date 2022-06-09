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


  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'yourmail@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
 */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
