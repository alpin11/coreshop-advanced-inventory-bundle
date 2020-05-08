<?php


namespace CoreShop\Bundle\AdvancedInventoryBundle\Checker;

use CoreShop\Component\Inventory\Checker\AvailabilityCheckerInterface;
use CoreShop\Component\Inventory\Model\StockableInterface;

class DefaultAvailabilityChecker extends AbstractAvailabilityChecker
{
    /**
     * @var AvailabilityCheckerInterface
     */
    private $defaultAvailabilityChecker;

    public function __construct(AvailabilityCheckerInterface $defaultAvailabilityChecker)
    {
        $this->defaultAvailabilityChecker = $defaultAvailabilityChecker;
    }

    /**
     * @inheritDoc
     */
    public function isStockAvailable(StockableInterface $stockable)
    {
        return $this->defaultAvailabilityChecker->isStockAvailable($stockable);
    }

    /**
     * @inheritDoc
     */
    public function isStockSufficient(StockableInterface $stockable, $quantity)
    {
        return $this->defaultAvailabilityChecker->isStockSufficient($stockable, $quantity);
    }
}
