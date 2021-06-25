<?php

namespace ContainerVqbRyez;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDonsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DonsController' shared autowired service.
     *
     * @return \App\Controller\DonsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DonsController.php';

        $container->services['App\\Controller\\DonsController'] = $instance = new \App\Controller\DonsController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\DonsController', $container));

        return $instance;
    }
}
