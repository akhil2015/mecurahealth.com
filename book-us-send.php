<?php
if(isset($_POST['submit'])) {
  $msg = 'Name: ' .$_POST['name']. 'Email: ' .$_POST['email']. 'Phone number ' .$_POST['contact'];

mail('ravianand.anand72@gmail.com', 
	'Appointment', $msg);

header('location: book-us-thank-you.php');
} else {
  header('Location: book-us.php');
  exit(0);
}
?>