<?php 
	
	$name = $_REQUEST[ 'full-name' ];
	$email = $_REQUEST[ 'email-address' ];
	$attendees = $_REQUEST[ 'attendees' ];
	$dietary = $_REQUEST[ 'dietary-requirements' ];
	$yes = $_REQUEST[ 'yes' ];
	$no = $_REQUEST[ 'no' ];
	
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$mail_subject = "Wedding RSVP";
	$email_body = "Name: ".$name." \r\nEmail Address: ".$email. " \r\nAttending: ".$yes." ".$no." \r\nAttendees: ".$attendees." \r\nDietary Requirements: ".$dietary."";
	
	if ( mail( 'matty_9899@hotmail.com', $mail_subject, $email_body, "From:" . $email ) ) {
		echo "Thank you for your reply <strong>$name</strong>!!!";
	} else {
		echo "Error sending message !!! Please try again";
	}
	/* luciennemichael@loveisingozo.com */
 ?>