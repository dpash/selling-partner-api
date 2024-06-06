<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Event extends Dto
{
    /**
     * @param  string  $eventCode  The tracking event type.
     * @param  DateTime  $eventTime  The ISO 8601 formatted timestamp of the event.
     * @param  ?Location  $location  The location where the person, business or institution is located.
     * @param  ?string  $shipmentType  Shipment type.
     */
    public function __construct(
        public readonly string $eventCode,
        public readonly \DateTime $eventTime,
        public readonly ?Location $location = null,
        public readonly ?string $shipmentType = null,
    ) {
    }
}
