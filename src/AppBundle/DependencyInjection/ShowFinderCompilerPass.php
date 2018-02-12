<?php

namespace AppBundle\DependencyInjection;

use AppBundle\ShowFinder\ShowFinder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBundle;
use Symfony\Component\DependencyInjection\Reference;

class ShowFinderCompilerPass implements CompilerPassInterface {
  public function process(ContainerBuilder $container) {
    $showFinderDefinition = $container->findDefinition(ShowFinder::class);

    $showFinderTaggedServices = $container->findTaggedServiceIds('show.finder');

    foreach($showFinderTaggedServices as $showFinderTaggedServiceId => $showFinderTaggedService) {
      $service = new Reference($showFinderTaggedServiceId);
      $showFinderDefinition->addMethodCall('addFinder', [$service]);
    }
  }
}
