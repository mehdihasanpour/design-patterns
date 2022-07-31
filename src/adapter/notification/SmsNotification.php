<?php

namespace App\adapter\notification;

class SmsNotification implements NotificationInterface
{
    public function send(string $message)
    {
        return $message . ' sended via sms';
    }
}
