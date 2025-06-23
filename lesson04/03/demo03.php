<?php

namespace lesson04\example3\demo03;

use SoapClient;

class SmsSender
{
    protected $client;

    public function __construct(SoapClient $client)
    {
        $this->client = $client;
    }
    public function send($phone, $text)
    {
        return $this->client->SendMessage(['phone' => $phone, 'text' => $text]);
    }
}

$client = new SoapClient('http://api.megafon.ru/api/api.wsdl');
$base = new SmsSender($client);
$base->send('+790000000', 'Привет!');