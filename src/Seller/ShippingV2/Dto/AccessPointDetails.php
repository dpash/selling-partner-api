<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class AccessPointDetails extends Dto
{
    /**
     * @param  ?string  $accessPointId  Unique identifier for the access point
     */
    public function __construct(
        public readonly ?string $accessPointId = null,
    ) {
    }
}
