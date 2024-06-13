<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require 'path/to/PHPMailer/src/Exception.php';
//require 'path/to/PHPMailer/src/PHPMailer.php';
//require 'path/to/PHPMailer/src/SMTP.php';

//Load Composer's autoloader
require __DIR__ . '/../vendor/autoload.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.brevo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kalanobleasmkt@gmail.com';                     //SMTP username
    $mail->Password   = 'wk7bxRE8BhJFyW19';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//    $mail->Port       = 587;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    // $mail->setFrom($_POST['email'], $_POST['email']);
    $mail->setFrom('website@mnamaquila.com', 'MNA Maquila');
    $mail->addAddress('info@mnamaquila.com', 'MNA Maquila');     //Add a recipient
//    $mail->addAddress('ellen@example.com');               //Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('darwin@markeagroup.com');
    $mail->addCC('andrea@kalanobleas.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    // Obtener el contenido del template HTML


    //Content
    $mail->CharSet = 'utf-8';
    $mail->isHTML(true);                                  //Set email format to HTML
    // Incluir el template PHP y pasar el mensaje del formulario como parámetro


    $contactMessage = new stdClass(); // Supongamos que $contactMessage es un objeto stdClass vacío
    $contactMessage->message = $_POST['message'];
    $contactMessage->telephone = $_POST['telephone'];
    $contactMessage->email = $_POST['email'];
    $contactMessage->name = $_POST['name'];
    $contactMessage->organization = $_POST['organization'];
    $contactMessage->imagenPathHero = __DIR__ . '/../images/imagen-hero-email.png'; // Ruta de la imagen
    $contactMessage->imagenPathLogo = __DIR__ . '/../images/logo-mna-maq.png'; // Ruta de la imagen

    // Adjuntar la imagen al correo electrónico
    $mail->AddEmbeddedImage($contactMessage->imagenPathHero, 'heroimg');
    $mail->AddEmbeddedImage($contactMessage->imagenPathLogo, 'logoimg');

    ob_start();
    include __DIR__ . '/contact-message.php';
    $html = ob_get_clean();
    $mail->Subject = 'Nuevo de mensaje de ' . $_POST['name'];
    $mail->Body .= $html;
    $mail->AltBody = $_POST['message'];
    $mail->send();

// Tu lógica PHP aquí

// Luego, genera el código JavaScript para SweetAlert



} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}