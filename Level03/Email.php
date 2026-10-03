<?php

class Email extends Notification {

public function notification() {
    
return "E-mail: " . $this->message;
}
}

