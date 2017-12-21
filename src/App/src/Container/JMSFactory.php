<?php
/**
 * Created by PhpStorm.
 * User: Emerson
 * Date: 17/12/2017
 * Time: 22:18
 */

namespace App\Container;

use JMS\Serializer\SerializerBuilder;
use Interop\Container\ContainerInterface;
use Doctrine\Common\Annotations\AnnotationRegistry;

class JMSFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $loader = require __DIR__ . '/../../../../vendor/autoload.php';
        AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

        AnnotationRegistry::registerAutoloadNamespace('Symfony\Component\Validator\Constraints', "/vendor/symfony/validator");

        $serializer = SerializerBuilder::create()->setPropertyNamingStrategy(
            new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()
            )
        )->build();

        return $serializer;
    }
}