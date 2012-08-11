<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$my_file = 'messages.txt';
	$data = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message . "\n\n";
	file_put_contents($my_file, $data);
	if ($handle = fopen($my_file, 'a')) {
		fwrite($handle, $data);
	} else {
		echo "<div class='error'>
                       Not Sent, Try Again Later
				</div>";
	}
	fclose($handle);
	header(index . html);
}
?>