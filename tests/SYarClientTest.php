<?php

class SYarClientTest extends PHPUnit_Framework_TestCase
{
    private $host = '127.0.0.1';
    private $port = 9504;
    
    private $client;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->client = new \FSth\SYar\Client\Client($this->host, $this->port, 'TestService');
    }

    public function testClient()
    {
        $result = $this->client->giveBack('hehe');
        var_dump($result);
    }
}