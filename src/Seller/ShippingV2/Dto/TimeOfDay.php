<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class TimeOfDay extends Dto
{
    /**
     * @param  ?int  $hourOfDay
     * @param  ?int  $minuteOfHour
     * @param  ?int  $secondOfMinute
     */
    public function __construct(
        public readonly ?int $hourOfDay = null,
        public readonly ?int $minuteOfHour = null,
        public readonly ?int $secondOfMinute = null,
    ) {
    }
}
