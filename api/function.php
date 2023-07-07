<?php

require dirname(__DIR__).'/PHPMailer/PHPMailerAutoload.php';

function sendMail($toEmail,$subject,$message,$filePath1='',$filePath2=''){

	$sender_email = "info@agency09.in";
  	$sender_name  = "ACADEMY09";

	
	$mail = new PHPMailer;

	/*$mail->SMTPDebug  = 3;      
	$mail->Debugoutput = 'html';  */
	/*$mail->IsSMTP();        
	// $mail->SMTPDebug  = 3;      
	// $mail->Debugoutput = 'html';                       
	$mail->Host = 'email-smtp.ap-south-1.amazonaws.com';
	$mail->SMTPAuth = true; 
	$mail->Username = 'AKIAQSYK4UCYHHII3IHC'; 
	$mail->Password = 'BHRy7Ab1rxWa2cUFzqmSrM9b82Zui1X6yvFJ7pV1AUt+';//'ryan@123'; 

	$mail->SMTPSecure = 'tls';   // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587; */  

	$mail->smtpConnect([
	    'ssl' => [
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    ]
	]);

	$mail->From = $sender_email;
	$mail->FromName = $sender_name;
	$mail->AddAddress($toEmail);  

	$mail->IsHTML(true);                                  

	$mail->Subject = $subject;
	$mail->Body    = $message;

	if($filePath1 != ''){
		$mail->addAttachment($filePath1);
	}
	if($filePath2 != ''){
		$mail->addAttachment($filePath2);
	}

	$mail->Send();
	/*if(!$mail->Send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   //exit;
	}*/
}




function sendMail_1($toEmail,$subject,$message,$is_admin=0){
          
  $sender_email = "info@bitsom.edu.in";
  $sender_name  = "Bitsom";
  
  // Always set content-type when sending HTML email
  $headers  = 'MIME-Version: 1.0' . "\r\n"; 
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: '.$sender_name.' <'.$sender_email.'>' . "\r\n";

  $result = mail($toEmail, $subject, $message, $headers);
  return $result;
}

function sendMailAttachemnt($toEmail,$subject,$message,$files){
    $sender_email = "enquiry@ensaara.co.in";
    $sender_name  = "Ensaara - Willow Homes";


    $boundary = md5("specialToken$4332"); // boundary token to be used

    //header
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:" . $sender_email . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

    //message text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    //attachments
    for ($x = 0; $x < count($files); $x++) {
        if (!empty($files[$x]['name'])) {
            
            //get file info
            $file_name = $files[$x]['name'];
            $file_type = $files[$x]['type'];

            //read file 
            $file = fopen($files[$x]['path'],"rb");
            $content = fread($file,filesize($files[$x]['path']));
    
            fclose($content);
            $encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)

            $body .= "--$boundary\r\n";
            $body .= "Content-Type: $file_type; name=" . $file_name . "\r\n";
            $body .= "Content-Disposition: attachment; filename=" . $file_name . "\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
            $body .= $encoded_content;
        }
    }
  
  $sentMail = @mail($toEmail, $subject, $body, $headers);

}


?>