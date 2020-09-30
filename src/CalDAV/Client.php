<?php

namespace Runn\CalDAV;

use Runn\Core\Config;
use Runn\Core\ConfigAwareInterface;
use Runn\Core\ConfigAwareTrait;

class Client implements ConfigAwareInterface
{

    use ConfigAwareTrait;

    public function __construct(Config $config)
    {
        $this->setConfig($config);
    }

}
