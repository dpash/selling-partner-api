<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Incentive extends Dto
{
    /**
     * @param  string  $description  Description of the incentive.
     * @param  string  $target  Target of the incentive. Can be 'Placement Services' or 'Fulfillment Fee Discount'.
     * @param  string  $type  Type of incentive. Can be: `FEE`, `DISCOUNT`.
     * @param  Currency  $value  Currency definition.
     */
    public function __construct(
        public readonly string $description,
        public readonly string $target,
        public readonly string $type,
        public readonly Currency $value,
    ) {
    }
}
