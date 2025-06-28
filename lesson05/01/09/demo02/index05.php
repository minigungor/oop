<?php

namespace lesson05\grasp\example09\demo02\index05;

use Swift_NullTransport;
use Swift_Plugins_MessageLogger;
use Swift_Mailer;
use Swift_Message;

require_once __DIR__ . '/vendor/autoload.php';

###############################################


$mailer = new Swift_Mailer(Swift_NullTransport::newInstance());

$loggerPlugin =  new Swift_Plugins_MessageLogger();

$mailer->registerPlugin($loggerPlugin);

$message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(['siski_02@internet.ru' => 'Ivan gor'])
    ->setTo(['siski_02@internet.ru' => 'Ivan gor'])
    ->setBody('Here is the message itself')
;

$mailer->send($message);

echo $loggerPlugin->countMessages() . PHP_EOL;