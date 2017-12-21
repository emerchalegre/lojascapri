<?php

namespace App\Action;

use Interop\Container\ContainerInterface;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class GazinJsonAction implements ServerMiddlewareInterface
{
    /**
     * Container
     *
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $uri = "http://emerchalegre-bling-com.umbler.net/dados.json";
        $response = \Httpful\Request::get($uri)->send();
        //$JMS = $this->container->get(\JMS\Serializer\Serializer::class);
        $JMS = $this->container->get(\JMS\Serializer\Serializer::class);
        $Request = $JMS->deserialize($response, 'array<App\Model\Gazin\Produto>', 'json');
        echo '<pre>';
        print_r($Request);exit;
        print_r($response);exit;
        exit;
    }
}
