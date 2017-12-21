<?php

namespace App\Action;

use Interop\Container\ContainerInterface;

class GazinJsonFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new \App\Action\GazinJsonAction($container);
    }
}