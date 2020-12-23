<?php
	
	use PHPMailer\PHPMailer\PHPmailer;
	use PHPMailer\PHPMailer\Exception;

	require '../vendor/autoload.php';
	
	function send_message_confirmation_via_email($email, $auth_code){
		$mail = new PHPMailer(true);
		try{
			$mail->SMTPDebug = 0;
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';                   	 	
	    	$mail->SMTPAuth   = true;                                 
	    	$mail->Username   = 'zredhard@gmail.com';                    
	    	$mail->Password   = 'keredsnevets13579';    
	   	 	$mail->Port       = 587; 

	   	 	$mail->isHTML(true);
	   	 	$mail->setFrom('zredhard@gmail.com', "@no-replyHDI");
	   	 	$mail->addAddress($email);
	   	 	$mail->Subject = 'Verifikasi Email Akun Sehatque';
	   	 	$mail->Body    = 'Silahkan melakukan konfirmasi email melalui link ini, jika ini bukan anda, silahkan abaikan email ini<br/><b>Link Verifikasi akun </b>' . APP_DEFAULT_GATEWAY . '/confirm/email/' . $auth_code;
	   	 	$mail->send();
		}
		catch(Exception $e){
			echo $e;
		}
	}
?>