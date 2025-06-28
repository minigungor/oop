<?php

namespace lesson05\grasp\example09\demo02\index06;

use Swift_Mailer;
use Swift_NullTransport;
use Swift_Events_EventListener;
use Swift_Events_SendEvent;
use Swift_Message;

require_once __DIR__ . '/vendor/autoload.php';

#####################################

$mailer = new Swift_Mailer(new Swift_NullTransport());

#####################################

class EchoPlugin implements Swift_Events_EventListener
{
    public function beforeSendPerformed(Swift_Events_SendEvent $evt)
    {
        echo 'Before sending: ' . $evt->getMessage()->getSubject() . PHP_EOL;
    }
    public function sendPerformed(Swift_Events_SendEvent $evt)
    {
        echo 'After sending: ' . $evt->getMessage()->getSubject() . PHP_EOL;
    }
}

$mailer->registerPlugin(new EchoPlugin());

#########################################

$message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(['siski_02@internet.ru' => 'Ivan gor'])
    ->setTo(['siski_02@internet.ru' => 'Ivan gor'])
    ->setBody('Here is the message itself')
;

$mailer->send($message);
