<?php

namespace lesson04\example3\demo02;

use SoapClient;

class SmsSender
{
    protected $client;

    public function __construct($wsdl)
    {
        $this->client = new SoapClient($wsdl);
    }
    public function send($phone, $text)
    {
        return $this->client->SendMessage(['phone' => $phone, 'text' => $text]);
    }
}

$base = new SmsSender('http://api.megafon.ru/api/api.wsdl');
$base->send('+790000000', 'Привет!');