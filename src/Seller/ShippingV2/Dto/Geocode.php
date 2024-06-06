<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Geocode extends Dto
{
    /**
     * @param  ?string  $latitude  The latitude of access point.
     * @param  ?string  $longitude  The longitude of access point.
     */
    public function __construct(
        public readonly ?string $latitude = null,
        public readonly ?string $longitude = null,
    ) {
    }
}
