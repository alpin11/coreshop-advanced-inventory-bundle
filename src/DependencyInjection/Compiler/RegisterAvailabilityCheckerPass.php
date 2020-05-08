<?php


namespace CoreShop\Bundle\AdvancedInventoryBundle\DependencyInjection\Compiler;

use CoreShop\Bundle\PimcoreBundle\DependencyInjection\Compiler\PrioritizedCompositeServicePass;

class RegisterAvailabilityCheckerPass extends PrioritizedCompositeServicePass
{
    public function __construct()
    {
        parent::__construct(
            'coreshop.inventory.availability_checker.advanced',
            'coreshop.inventory.availability_checker.composite',
            'coreshop.inventory.availability_checker',
            'addAvailabilityChecker'
        );
    }
}
