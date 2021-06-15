<?php
		$message_sent = false;
		if(isset($_POST['email']) && $_POST['email'] != ''){
			
			if(filter_var($_POST['name'], FILTER_VALIDATE_EMAIL) ) {
				// Submit the form
				$userName = $_POST['name'];
				$userEmail = $POST['email'];
				$message = $_POST['message'];

				$to = "zamirlal15@gmail.com"
				$body = "";

				$body.= "From: ".$userName."\r\n";
				$body.= "Email: ".$userEmail."\r\n";
				$body.= "Message: ".$message."\r\n";

				mail($to, $body);

				$message_sent = true;
			}
		}
?>