<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Weight extends Dto
{
    /**
     * @param  string  $unit  Unit of the weight being measured.
     * @param  float  $value  Value of a weight.
     */
    public function __construct(
        public readonly string $unit,
        public readonly float $value,
    ) {
    }
}