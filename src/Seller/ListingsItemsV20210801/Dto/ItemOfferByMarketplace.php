<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class ItemOfferByMarketplace extends Dto
{
    /**
     * @param  string  $marketplaceId  The Amazon marketplace identifier.
     * @param  string  $offerType  Type of offer for the listings item.
     * @param  Money  $price  The currency type and amount.
     * @param  ?Points  $points  The number of Amazon Points offered with the purchase of an item, and their monetary value. Note that the `Points` element is only returned in Japan (JP).
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $offerType,
        public readonly Money $price,
        public readonly ?Points $points = null,
    ) {
    }
}
