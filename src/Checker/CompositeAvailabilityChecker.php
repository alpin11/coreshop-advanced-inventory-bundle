<?php


namespace CoreShop\Bundle\AdvancedInventoryBundle\Checker;


use CoreShop\Component\Inventory\Model\StockableInterface;
use Zend\Stdlib\PriorityQueue;

class CompositeAvailabilityChecker implements AvailabilityCheckerInterface
{

    /**
     * @var PriorityQueue|AvailabilityCheckerInterface[]
     */
    private $checkers;

    public function __construct()
    {
        $this->checkers = new PriorityQueue();
    }

    /**
     * @param AvailabilityCheckerInterface $availabilityChecker
     * @param int $priority
     */
    public function addAvailabilityChecker(AvailabilityCheckerInterface $availabilityChecker, $priority = 0)
    {
        $this->checkers->insert($availabilityChecker, $priority);
    }

    /**
     * @inheritDoc
     */
    public function isStockAvailable(StockableInterface $stockable)
    {
        foreach ($this->checkers as $checker) {

            if (!$checker->supports($stockable)) {
                continue;
            }

            if (!$checker->isStockAvailable($stockable)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    public function isStockSufficient(StockableInterface $stockable, $quantity)
    {
        foreach ($this->checkers as $checker) {

            if (!$checker->supports($stockable)) {
                continue;
            }


            if (!$checker->isStockSufficient($stockable, $quantity)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    public function supports($stockable)
    {
        return $stockable instanceof StockableInterface;
    }
}
