<?php
extract($_POST);
/*
Primero, obtenemos el listado de e-mails
desde nuestra base de datos y la incorporamos a un Array.
*/

$array = array("centrohappykids@gmail.com");

/*
Incluimos el PHPMailerAutoload, que se encarga de incorporar
a nuestro código, todos los archivos necesarios para utilizar la librería.
Supongamos que guardamos dicha librería en un directorio llamado "phpmailer"
*/

require("lib/PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer;

// Configuramos los datos de sesión para conectarnos al servicio SMTP de Mandrill
$mail->IsSMTP(); // Indicamos que vamos a utilizar SMTP
$mail->Host = 'mail.happykids.edu.co'; // El Host de Mandrill
$mail->Port = 26;  // El puerto que Mandrill nos indica utilizar
$mail->SMTPAuth = true; // Indicamos que vamos a utilizar auteticación SMTP
$mail->Username = 'coordsistemas@happykids.edu.co'; // Nuestro usuario en Mandrill
$mail->Password = '910101141'; // Key generado por Mandrill
$mail->SMTPSecure = 'tls'; // Activamos el cifrado tls (también ssl)

// Ahora configuraremos los parámetros básicos de PHPMailer para hacer un envío típico

$mail->From = 'happykids@gmail.com'; // Nuestro correo electrónico
$mail->FromName = 'Happy Kids'; // El nombre de nuestro sitio o proyecto
$mail->IsHTML(true); // Indicamos que el email tiene formato HTML
$mail->Subject = "Mensaje de contacto de ".$nombre.""; // El asunto del email
$mail->Body = 'mensaje enviado por '.$nombre.' con E-mail '.$email.' y telefono '.$telefono.' el asunto es el sigunete: '.$asunto.''; // El cuerpo de nuestro mensaje

// Recorremos nuestro array de e-mails.

foreach ($array as $email) {
$mail->AddAddress($email); // Cargamos el e-mail destinatario a la clase PHPMailer
$mail->Send(); // Realiza el envío =)
$mail->ClearAddresses(); // Limpia los "Address" cargados previamente para volver a cargar uno.
}

echo '<div class="center-aligner center blue white-text btn">Mensaje enviado!</div>';