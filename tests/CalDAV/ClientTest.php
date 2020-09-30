<?php

namespace Runn\tests\CalDAV\Client;

use PHPUnit\Framework\TestCase;
use Runn\CalDAV\Client;
use Runn\CalDAV\Exceptions\InvalidClientConfigException;
use Runn\Core\Config;

class ClientTest extends TestCase
{

    public function testConstruct()
    {
        $config = new Config(['url' => 'localhost', 'user' => 'foo', 'password' => 'bar']);
        $client = new Client($config);
        $this->assertSame($config, $client->getConfig());
    }

    public function testConstructEmptyUrl()
    {
        $config = new Config(['user' => 'foo', 'password' => 'bar']);

        $this->expectException(InvalidClientConfigException::class);
        $this->expectExceptionMessage('Empty base url');
        $client = new Client($config);
    }

    public function testConstructEmptyUser()
    {
        $config = new Config(['url' => 'localhost', 'password' => 'bar']);

        $this->expectException(InvalidClientConfigException::class);
        $this->expectExceptionMessage('Empty user name');
        $client = new Client($config);
    }

    public function testConstructEmptyPassword()
    {
        $config = new Config(['url' => 'localhost', 'user' => 'foo']);

        $this->expectException(InvalidClientConfigException::class);
        $this->expectExceptionMessage('Empty password');
        $client = new Client($config);
    }

}
