<?php

class Sms extends Notification{
    public function notification()
    {
        return "SMS: " . $this->message;
    }
}