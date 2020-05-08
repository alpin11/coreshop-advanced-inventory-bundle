<?php


namespace CoreShop\Bundle\AdvancedInventoryBundle\Checker;

use CoreShop\Component\Inventory\Checker\AvailabilityCheckerInterface as BaseAvailabilityCheckerInterface;

interface AvailabilityCheckerInterface extends BaseAvailabilityCheckerInterface
{
    /**
     * @param $stockable
     *
     * @return bool
     */
    public function supports($stockable);
}
