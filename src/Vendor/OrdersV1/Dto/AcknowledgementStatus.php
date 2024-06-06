<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class AcknowledgementStatus extends Dto
{
    protected static array $complexArrayTypes = ['acknowledgementStatusDetails' => [AcknowledgementStatusDetails::class]];

    /**
     * @param  ?string  $confirmationStatus  Confirmation status of line item.
     * @param  ?ItemQuantity  $acceptedQuantity  Details of quantity ordered.
     * @param  ?ItemQuantity  $rejectedQuantity  Details of quantity ordered.
     * @param  AcknowledgementStatusDetails[]|null  $acknowledgementStatusDetails  Details of item quantity confirmed.
     */
    public function __construct(
        public readonly ?string $confirmationStatus = null,
        public readonly ?ItemQuantity $acceptedQuantity = null,
        public readonly ?ItemQuantity $rejectedQuantity = null,
        public readonly ?array $acknowledgementStatusDetails = null,
    ) {
    }
}
