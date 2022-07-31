<?php

namespace App\adapter\notification;

class SlackNotificationAdapter implements NotificationInterface
{
    public function __construct(private SlackNotificationAdaptee $slackSender)
    {
    }

    public function send(string $message)
    {
        return $this->slackSender->sendMessage($message);
    }
}
