<?php

 if(isset($_POST['submit']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$number = $_POST['number'];
  $message = $_POST['message'];

 	$to = 'rajatktak@gmail.com';
 	$subject1 = 'Web doubt Request';
 	$message1 = "Name: ".$name."\n"."Email: ".$email."\n"."Phone number: ".$number."\n\n\n"."Message:\n".$message;
 	$header  = "From: ".$email;

 	if(mail($to, $subject1, $message1, $header))
 	{
 		?>
 		<script>alert('Mail Sent successfully Thank you');
     window.open('index.html','_self');
 	</script>
 		<?php
     	}
 	else
 	{
 		echo "wrong";
 	}
 }
 ?>
