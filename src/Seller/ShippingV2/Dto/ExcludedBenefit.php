<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class ExcludedBenefit extends Dto
{
    public function __construct(
        public readonly string $benefit,
        public readonly string $reasonCode,
    ) {
    }
}
