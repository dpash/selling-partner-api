<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class ShippingLabel extends Dto
{
    protected static array $complexArrayTypes = ['labelData' => [LabelData::class]];

    /**
     * @param  string  $purchaseOrderNumber  This field will contain the Purchase Order Number for this order.
     * @param  string  $labelFormat  Format of the label.
     * @param  LabelData[]  $labelData  Provides the details of the packages in this shipment.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly string $labelFormat,
        public readonly array $labelData,
    ) {
    }
}
