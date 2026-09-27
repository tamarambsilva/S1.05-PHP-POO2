<?php



// CLASE ABSTRACTA: NOTIFICACIÓN


abstract class Notificacion
{
    protected $mensaje;

    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    // Cada tipo de notificación debe implementar este método
    abstract public function notificar();
}


// CLASE EMAIL

class Email extends Notificacion
{
    public function notificar()
    {
        return "Enviando Email: " . $this->mensaje;
    }
}



// CLASE SMS


class SMS extends Notificacion
{
    public function notificar()
    {
        return "Enviando SMS: " . $this->mensaje;
    }
}


// CLASE CORREO ORDINARIO


class CorreoOrdinario extends Notificacion
{
    public function notificar()
    {
        return "Enviando correo ordinario: " . $this->mensaje;
    }
}


// CREAR LAS NOTIFICACIONES


$email = new Email("Tienes un nuevo mensaje");
$sms = new SMS("Tu pedido ha sido enviado");
$correo = new CorreoOrdinario("Has recibido una carta");



// MOSTRAR LAS NOTIFICACIONES


echo $email->notificar() . PHP_EOL;
echo $sms->notificar() . PHP_EOL;
echo $correo->notificar() . PHP_EOL;
