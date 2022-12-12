<?php

namespace ContainerRfXp25l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PcJCjPzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PcJCjPz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PcJCjPz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendar' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
        ], [
            'calendar' => 'App\\Repository\\CalendarRepository',
        ]);
    }
}