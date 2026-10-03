<?php


abstract class Notification
{
    public string $message;

    // Construtor
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    // Cada tipo de notificación debe implementar este método
    abstract public function notification();
}


require_once "Notification.php"; 
require_once "Email.php";
require_once "Sms.php";
require_once "PostalMail.php";


// CREAR LAS NOTIFICACIONES


$email = new Email("You have a new e-mail");
$sms = new SMS("You have a new sms");
$postalMail = new PostalMail("You have a new postal");

echo  "<br>";

// MOSTRAR LAS NOTIFICACIONES


echo $email->notification() . "<br><br>";
echo $sms->notification() . "<br><br>";
echo $postalMail->notification() . "<br><br>";
