<?php

namespace ContainerOTZWgCy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D6judUQService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.D6judUQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D6judUQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository_lieu' => ['privates', 'App\\Repository\\LieuRepository', 'getLieuRepositoryService', true],
            'repository_ville' => ['privates', 'App\\Repository\\VilleRepository', 'getVilleRepositoryService', true],
        ], [
            'repository_lieu' => 'App\\Repository\\LieuRepository',
            'repository_ville' => 'App\\Repository\\VilleRepository',
        ]);
    }
}
