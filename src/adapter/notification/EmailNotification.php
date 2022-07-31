<?php

namespace App\adapter\notification;

class EmailNotification implements NotificationInterface
{
    public function send(string $message)
    {
        return $message . ' sended via email';
    }
}
