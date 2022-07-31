<?php

namespace App\adapter\notification;

interface NotificationInterface
{
    public function send(string $message);
}