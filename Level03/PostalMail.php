<?php


class PostalMail extends Notification
{
    public function notification()
    {
        return "Postal Mail: " . $this->message;
    }
}

