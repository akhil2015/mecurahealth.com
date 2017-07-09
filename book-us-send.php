<?php
if(isset($_POST['submit'])) {
  $msg = 'Name: ' .$_POST['name'] ."\n"
	'Email: ' .$_POST['email'] ."\n"
	'Phone number ' ."\n" .$_POST['contact'];

mail('akhilcool1996@gmail.com', 
	'Appointment', $msg);

header('location: book-us-thank-you.html');
} else {
  header('Location: book-us.php');
  exit(0);
}
?>