<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class NdrRequestData extends Dto
{
    /**
     * @param  ?DateTime  $rescheduleDate  The date on which the Seller wants to reschedule shipment delivery, in ISO-8601 date/time format
     * @param  ?string  $additionalAddressNotes  Address notes to re-attempt delivery with.
     */
    public function __construct(
        public readonly ?\DateTime $rescheduleDate = null,
        public readonly ?string $additionalAddressNotes = null,
    ) {
    }
}
