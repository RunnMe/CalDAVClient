<?php

namespace Runn\tests\CalDAV\Client;

use PHPUnit\Framework\TestCase;
use Runn\CalDAV\Client;
use Runn\Core\Config;

class ClientTest extends TestCase
{

    public function testConstruct()
    {
        $config = new Config(['host' => 'localhost', 'user' => 'foo', 'password' => 'bar']);
        $client = new Client($config);
        $this->assertSame($config, $client->getConfig());
    }

}
