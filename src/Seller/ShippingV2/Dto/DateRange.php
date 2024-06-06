<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class DateRange extends Dto
{
    /**
     * @param  ?string  $startDate  Start Date for query .
     * @param  ?string  $endDate  end date for query.
     */
    public function __construct(
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
    ) {
    }
}
