<?php 

	if( isset($_REQUEST['name']) && !empty($_REQUEST['name']) && 
	isset($_REQUEST['email']) && !empty($_REQUEST['email']) ) {	
		
		//Email Details to User
		$to_email = "gunjur@foundationschoolindia.com,piyush@buzzads.in";
		$name = "The Foundation School";
		$replyto = "gunjur@foundationschoolindia.com";	
		$subject = "The Foundation School - Admission Registration Form Download";
		$headers = "From: gunjur@foundationschoolindia.com\r\n";
		$headers .= "Reply-To: gunjur@foundationschoolindia.com\r\n";		
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";							
		$message  = '<html><body >';		
		$message .= '<p><strong>Name:</strong> '.$_REQUEST['name'].'</p>';		
		$message .= '<p><strong>Email:</strong> '.$_REQUEST['email'].'</p>';
		$message .= '<p><strong>Phone:</strong> '.$_REQUEST['phone'].'</p>';
		$message .= '<p><strong>Grade:</strong> '.$_REQUEST['grade'].'</p>';			
		$message .=  '</body></html>';		
		$result = mail($to_email, $subject, $message, $headers);		
		if($result)echo '
		<h4 onload ="trackEventFormDownloadRegistration()">Thank You for Registering !!</h4>
		<p onload ="trackEventFormDownloadRegistration()">Click <a href="admissions/downloads/FoundationSchoolAdmissionForm.pdf" target="_blank"><strong style="color:rgb(0,0,255); text-decoration:underline;" onclick=" trackEventDownloadAdmissionForm();">here</strong></a> to download application form.</p>
		<p>An email has been sent to you with details of the admission process. </p>
		<p>Please check your Spam folder if you don\'t find the email in your Inbox.</p>';
			else echo 'Please Try Again!';	
		
		
		//Thank user
		$user_email = $_REQUEST['email'];
		$user_name= "The Foundation School";	
		$replyto = "gunjur@foundationschoolindia.com";	
		$user_subject = "Thank You & Welcome to Foundation School, Gunjur, Varthur.";
		$headers = "From: gunjur@foundationschoolindia.com\r\n";
		$headers .= "Reply-To: gunjur@foundationschoolindia.com\r\n";
		//$headers .= "Reply-To: info@attoinfotech.website\r\n";	
		$headers .= "BCC: gunjur@foundationschoolindia.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";							
		$message  = '<html><body>';		
		$message .= '<p>Dear Parent,</p>';
		$message .= '<p>Thank you very much for choosing Foundation School, Gunjur, Varthur for the education of your child.</p>';
		$message .= '<p>The Admission Process at the Foundation School is simple and transparent. You simply need to follow the steps given below:</p>';
		$message .= '<p>1. Click <a href="http://attoinfotech.website/demo/tfs/downloads/FoundationSchoolAdmissionForm.pdf" target="_blank"><strong onclick="trackEventDownloadAdmissionForm();">here</strong></a> to download the application form.</p>';
		$message .= '<p>2. Please complete the Application form and take a print out.</p>';
		$message .= '<p>3. Along with the Admission Form please attach a copy of the child\'s Birth Certificate (if the child is being admitted in Montessori 1 (Nursery)) for any other Class a Transfer Certificate from the current School is necessary.</p>';
		$message .= '<p>4. Please call up the the Foundation School Gunjur on +91-8951506474, +91-8951188040 or +91-8951188272 and fix an appointment to visit the School for an interaction with the child. </p>';
		$message .= '<p>Note: At the Foundation School we encourage you to visit with the child as we want your child to have a first hand feel of the Foundation Approach.</p>';
		$message .= '<p>Thanking you.</p>';
		$message .= '<p>Warm Regards,</p>';
		$message .= '<p>Bithi Agarwal</p>';
		$message .= '<p>&nbsp;</p>';
		$message .= '<p>+91-9900918382</p>';		
		$message .=  '</body></html>';		
		$usermail = mail($user_email, $user_subject, $message, $headers);			
}

?>