<?php

namespace Runn\CalDAV;

use Runn\CalDAV\Exceptions\InvalidClientConfigException;
use Runn\Core\Config;
use Runn\Core\ConfigAwareInterface;
use Runn\Core\ConfigAwareTrait;

/**
 * Class Client
 * @package Runn\CalDAV
 */
class Client implements ConfigAwareInterface
{

    use ConfigAwareTrait;

    protected /* @7.4 string */$url;
    protected /* @7.4 string */$user;
    protected /* @7.4 string */$password;

    /**
     * Client constructor.
     * @param Config $config
     * @throws InvalidClientConfigException
     */
    public function __construct(Config $config)
    {
        $this->setConfig($config);

        if (isset($this->getConfig()->url)) {
            $this->url = (string)$this->getConfig()->url;
        } else {
            throw new InvalidClientConfigException('Empty base url');
        }

        if (isset($this->getConfig()->user)) {
            $this->user = (string)$this->getConfig()->user;
        } else {
            throw new InvalidClientConfigException('Empty user name');
        }

        if (isset($this->getConfig()->password)) {
            $this->password = (string)$this->getConfig()->password;
        } else {
            throw new InvalidClientConfigException('Empty password');
        }
    }

}
