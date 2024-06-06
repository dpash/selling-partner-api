<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ShipmentDetails extends Dto
{
    protected static array $complexArrayTypes = ['shipments' => [Shipment::class]];

    /**
     * @param  ?Pagination  $pagination  The pagination elements required to retrieve the remaining data.
     * @param  Shipment[]|null  $shipments  A list of one or more shipments with underlying details.
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $shipments = null,
    ) {
    }
}
