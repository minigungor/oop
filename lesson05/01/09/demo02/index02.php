<?php

namespace lesson05\grasp\example09\demo02\index02;

use Swift_Mailer;
use Swift_SendMailTransport;
use Swift_Message;

require_once __DIR__ . '/vendor/autoload.php';

################################################

$transport = new Swift_SendMailTransport('/usr/sbin/sendmail -bs');

$mailer = new Swift_Mailer($transport);

$message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(['siski_02@internet.ru' => 'Ivan gor'])
    ->setTo(['siski_02@internet.ru' => 'Ivan gor'])
    ->setBody('Here is the message itself')
;

$mailer->send($message);