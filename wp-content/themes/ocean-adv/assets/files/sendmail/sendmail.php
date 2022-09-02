<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	/*
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'user@example.com';                     //SMTP username
	$mail->Password   = 'secret';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	$mail->Port       = 465;                 
	*/

	//От кого письмо
	$mail->setFrom('manager@ocean-adv.com.ua', 'ocean-adv.com.ua'); // Указать нужный E-mail
	//Кому отправить
	$mail->addAddress('argo21zm@gmail.com'); // Указать нужный E-mail
	//Тема письма
	$mail->Subject = 'Нова заявка з сайту ocean-adv.com.ua';

	//Тело письма
     	
        if(trim(!empty($_POST['client-name']))){
	    $body.='<p><strong>Client name: </strong></p>' .$_POST['client-name'];
	}
	    if(trim(!empty($_POST['client-phone']))){
		$body.='<p><strong>Client phone: </strong></p>'.$_POST['client-phone'];
	}	
		if(trim(!empty($_POST['client-email']))){
		$body.='<p><strong>Client email: </strong></p>'.$_POST['client-email'];
	}
		if(trim(!empty($_POST['client-description']))){
		$body.='<p><strong>Client description: </strong></p>'.$_POST['client-description'];
	}
	
	
	/*
	//Прикрепить файл
	if (!empty($_FILES['image']['tmp_name'])) {
		//путь загрузки файла
		$filePath = __DIR__ . "/files/sendmail/attachments/" . $_FILES['image']['name']; 
		//грузим файл
		if (copy($_FILES['image']['tmp_name'], $filePath)){
			$fileAttach = $filePath;
			$body.='<p><strong>Фото в приложении</strong>';
			$mail->addAttachment($fileAttach);
		}
	}
	*/

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Error';
	} else {
		$message = 'Success';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>