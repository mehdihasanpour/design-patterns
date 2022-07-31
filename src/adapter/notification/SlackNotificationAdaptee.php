<?php

namespace App\adapter\notification;

class SlackNotificationAdaptee
{
    public function sendMessage(string $message)
    {
        return $message . ' sended via slack';
    }
}
