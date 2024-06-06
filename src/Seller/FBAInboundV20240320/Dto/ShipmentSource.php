<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ShipmentSource extends Dto
{
    /**
     * @param  string  $sourceType  The type of source for this shipment. Can be: `SELLER_FACILITY`.
     * @param  ?Address  $address  Specific details to identify a place.
     */
    public function __construct(
        public readonly string $sourceType,
        public readonly ?Address $address = null,
    ) {
    }
}
