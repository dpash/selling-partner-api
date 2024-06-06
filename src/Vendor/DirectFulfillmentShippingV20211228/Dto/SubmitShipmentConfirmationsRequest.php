<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class SubmitShipmentConfirmationsRequest extends Dto
{
    protected static array $complexArrayTypes = ['shipmentConfirmations' => [ShipmentConfirmation::class]];

    /**
     * @param  ShipmentConfirmation[]|null  $shipmentConfirmations
     */
    public function __construct(
        public readonly ?array $shipmentConfirmations = null,
    ) {
    }
}
