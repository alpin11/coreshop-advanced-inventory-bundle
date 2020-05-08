<?php


namespace CoreShop\Bundle\AdvancedInventoryBundle\Checker;

use CoreShop\Component\Inventory\Model\StockableInterface;

abstract class AbstractAvailabilityChecker implements AvailabilityCheckerInterface
{
    public function supports($stockable)
    {
        return $stockable instanceof StockableInterface;
    }
}
