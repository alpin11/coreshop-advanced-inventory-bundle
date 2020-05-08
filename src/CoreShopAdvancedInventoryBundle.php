<?php


namespace CoreShop\Bundle\AdvancedInventoryBundle;


use CoreShop\Bundle\AdvancedInventoryBundle\DependencyInjection\Compiler\RegisterAvailabilityCheckerPass;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class CoreShopAdvancedInventoryBundle extends AbstractPimcoreBundle
{


    /**
     * @inheritDoc
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RegisterAvailabilityCheckerPass());
    }
}
