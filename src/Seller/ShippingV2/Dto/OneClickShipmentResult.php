<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class OneClickShipmentResult extends Dto
{
    protected static array $complexArrayTypes = ['packageDocumentDetails' => [PackageDocumentDetail::class]];

    /**
     * @param  string  $shipmentId  The unique shipment identifier provided by a shipping service.
     * @param  PackageDocumentDetail[]  $packageDocumentDetails  A list of post-purchase details about a package that will be shipped using a shipping service.
     * @param  Promise  $promise  The time windows promised for pickup and delivery events.
     * @param  Carrier  $carrier  Carrier Related Info
     * @param  Service  $service  Service Related Info
     * @param  Currency  $totalCharge  The monetary value in the currency indicated, in ISO 4217 standard format.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly array $packageDocumentDetails,
        public readonly Promise $promise,
        public readonly Carrier $carrier,
        public readonly Service $service,
        public readonly Currency $totalCharge,
    ) {
    }
}
