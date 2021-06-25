<?php

namespace ContainerBr7ADb1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAchatsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AchatsController' shared autowired service.
     *
     * @return \App\Controller\AchatsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AchatsController.php';

        $container->services['App\\Controller\\AchatsController'] = $instance = new \App\Controller\AchatsController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\AchatsController', $container));

        return $instance;
    }
}