<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class ItemIdentifiersByMarketplace extends Dto
{
    /**
     * @param  ?string  $marketplaceId  A marketplace identifier. Identifies the Amazon marketplace for the listings item.
     * @param  ?string  $asin  Amazon Standard Identification Number (ASIN) of the listings item.
     */
    public function __construct(
        public readonly ?string $marketplaceId = null,
        public readonly ?string $asin = null,
    ) {
    }
}
