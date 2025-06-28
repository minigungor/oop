<?php

namespace lesson05\grasp\example09\demo02\index03;

use Swift_Mailer;
use Swift_SmtpTransport;
use Swift_Message;

require_once __DIR__ . '/vendor/autoload.php';

################################################

$transport = Swift_SmtpTransport::newInstance('smtp.example.org', 443, 'tls')
    ->setUsername('username')
    ->setPassword('password')
;

$mailer = new Swift_Mailer($transport);

$message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(['siski_02@internet.ru' => 'Ivan gor'])
    ->setTo(['siski_02@internet.ru' => 'Ivan gor'])
    ->setBody('Here is the message itself')
;

$mailer->send($message);