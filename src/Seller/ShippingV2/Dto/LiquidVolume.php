<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class LiquidVolume extends Dto
{
    /**
     * @param  string  $unit  The unit of measurement.
     * @param  float  $value  The measurement value.
     */
    public function __construct(
        public readonly string $unit,
        public readonly float $value,
    ) {
    }
}
