<?php

namespace Test\Unit\adapter\notification;

use App\adapter\notification\EmailNotification;
use App\adapter\notification\SlackNotificationAdaptee;
use App\adapter\notification\SlackNotificationAdapter;
use App\adapter\notification\SmsNotification;
use Test\Support\CustomTestCase;

class notificationTest extends CustomTestCase
{
    public function test_we_should_be_able_to_send_notification_via_email()
    {
        $notification = new EmailNotification();
        $this->assertSame('hi sended via email', $notification->send('hi'));
    }

    public function test_we_should_be_able_to_send_notification_via_sms()
    {
        $notification = new SmsNotification();
        $this->assertSame('hi sended via sms', $notification->send('hi'));
    }

    public function test_we_should_be_able_to_send_notification_via_slack()
    {
        $notification = new SlackNotificationAdapter(new SlackNotificationAdaptee);
        $this->assertSame('hi sended via slack', $notification->send('hi'));
    }
}
