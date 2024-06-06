<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class SpdTrackingItem extends Dto
{
    /**
     * @param  ?string  $boxId  The ID provided by Amazon that identifies a given box. This ID is comprised of the external shipment ID (which is generated after transportation has been confirmed) and the index of the box.
     * @param  ?string  $trackingId  The tracking ID associated with each box in a non-Amazon partnered Small Parcel Delivery (SPD) shipment.
     * @param  ?string  $trackingNumberValidationStatus  Whether or not Amazon has validated the tracking number. If more than 24 hours have passed and the status is not yet 'VALIDATED', please verify the number and update if necessary. Can be: `VALIDATED`, `NOT_VALIDATED`.
     */
    public function __construct(
        public readonly ?string $boxId = null,
        public readonly ?string $trackingId = null,
        public readonly ?string $trackingNumberValidationStatus = null,
    ) {
    }
}
