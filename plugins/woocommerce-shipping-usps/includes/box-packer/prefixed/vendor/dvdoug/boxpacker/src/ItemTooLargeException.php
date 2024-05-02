<?php

/**
 * Box packing (3D bin packing, knapsack problem).
 *
 * @author Doug Wright
 */
declare (strict_types=1);
namespace WC_USPS\DVDoug\BoxPacker;

/**
 * Class ItemTooLargeException
 * Exception used when an item is too large to pack into any box.
 * @deprecated now unused, just catch NoBoxesAvailableException
 * @internal
 */
class ItemTooLargeException extends NoBoxesAvailableException
{
}
