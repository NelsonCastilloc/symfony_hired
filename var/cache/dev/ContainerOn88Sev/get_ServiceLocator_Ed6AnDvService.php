<?php

namespace ContainerOn88Sev;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ed6AnDvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ed6AnDv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ed6AnDv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidateRepository' => ['privates', 'App\\Repository\\CandidateRepository', 'getCandidateRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'sendMail' => ['privates', 'App\\Service\\SendMail', 'getSendMailService', true],
        ], [
            'candidateRepository' => 'App\\Repository\\CandidateRepository',
            'em' => '?',
            'sendMail' => 'App\\Service\\SendMail',
        ]);
    }
}
