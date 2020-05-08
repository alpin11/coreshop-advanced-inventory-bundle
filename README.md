# CoreShop Advanced Inventory Bundle

This Bundle adds some simple but effective changes to the availability checker. 
It requires the [coreshop/inventory-bundle](https://github.com/coreshop/inventory-bundle) repository which will be installed automatically.

## TO DOs 

✅ Register custom availability checkers as services 

➡️ Add a basic toolkit for cached availability checking (e.g fetching stock levels from API)

## Installation

#### 1. Composer
```bash
    composer require alpin11/coreshop-advanced-inventory-bundle
```

#### 2. Activate
Enable the Bundle in Pimcore Extension Manager or via CLI 

```bash
    bin/console pimcore:bundle:enable CoreShopAdvancedInventoryBundle
```

#### 3. Setup

Add a custom availability checker class with the interface `CoreShop\Bundle\AdvancedInventoryBundle\Checker\AvailabilityCheckerInterface`

Then register your class as a service and tag it with `coreshop.inventory.availability_checker`

```yaml
    AppBundle\CoreShop\Inventory\Checker\MyAvailabilityChecker:
        tags:
            - { name: coreshop.inventory.availability_checker, priority: 200 }
```
#### 4. Done 

The bundle automatically overrides the `coreshop.inventory.availability_checker.default` so you don't have
to update any of your services. It also makes the alias public, so you can directly access it through the container.
