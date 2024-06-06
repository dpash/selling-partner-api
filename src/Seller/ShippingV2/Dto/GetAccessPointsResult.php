<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class GetAccessPointsResult extends Dto
{
    /**
     * @param  array[]  $accessPointsMap  Map of type of access point to list of access points
     */
    public function __construct(
        public readonly array $accessPointsMap,
    ) {
    }
}
