<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Item extends Dto
{
    protected static array $complexArrayTypes = ['prepInstructions' => [PrepInstruction::class]];

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $fnsku  A unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center.
     * @param  string  $labelOwner  Specifies who will label the items. Options include `AMAZON`, `SELLER`, and `NONE`.
     * @param  string  $msku  The merchant defined SKU ID.
     * @param  PrepInstruction[]  $prepInstructions  Special preparations that are required for an item.
     * @param  int  $quantity  The number of the specified MSKU.
     * @param  ?string  $expiration  The expiration date of the MSKU in ISO 8601 format. The same MSKU with different expiration dates cannot go into the same box.
     * @param  ?string  $manufacturingLotCode  The manufacturing lot code.
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $fnsku,
        public readonly string $labelOwner,
        public readonly string $msku,
        public readonly array $prepInstructions,
        public readonly int $quantity,
        public readonly ?string $expiration = null,
        public readonly ?string $manufacturingLotCode = null,
    ) {
    }
}
