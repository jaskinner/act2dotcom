<?php

/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Doug Wright
 */
declare (strict_types=1);
namespace WC_USPS;

use WC_USPS\DVDoug\BoxPacker\InfalliblePacker;
use WC_USPS\DVDoug\BoxPacker\Item;
use WC_USPS\DVDoug\BoxPacker\ItemList;
use WC_USPS\PHPUnit\Framework\Assert;
/**
 * Defines application features from the specific context.
 * @internal
 */
class InfalliblePackerContext extends PackerContext
{
    /** @var string */
    protected $packerClass = InfalliblePacker::class;
    /** @var ItemList */
    protected $unpackedItemList;
    /**
     * @When I do an infallible packing
     */
    public function iDoAnInfalliblePacking() : void
    {
        $packer = new InfalliblePacker();
        $packer->setBoxes($this->boxList);
        $packer->setItems($this->itemList);
        $this->packedBoxList = $packer->pack();
        $this->unpackedItemList = $packer->getUnpackedItems();
    }
    /**
     * @Then /^the unpacked item list should have (\d+) items of type "([^"]+)"$/
     */
    public function theUnpackedItemListShouldHaveItems($qty, $itemType) : void
    {
        $foundItems = 0;
        /** @var Item $unpackedItem */
        foreach ($this->unpackedItemList as $unpackedItem) {
            if ($unpackedItem->getDescription() === $itemType) {
                ++$foundItems;
            }
        }
        Assert::assertEquals($qty, $foundItems);
    }
}
/**
 * Defines application features from the specific context.
 * @internal
 */
\class_alias('WC_USPS\\InfalliblePackerContext', 'InfalliblePackerContext', \false);
