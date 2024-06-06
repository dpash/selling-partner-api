<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class ShipmentConfirmation extends Dto
{
    protected static array $complexArrayTypes = ['items' => [Item::class], 'containers' => [Container::class]];

    /**
     * @param  string  $purchaseOrderNumber  Purchase order number corresponding to the shipment.
     * @param  ShipmentDetails  $shipmentDetails  Details about a shipment.
     * @param  Item[]  $items  Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package.
     * @param  Container[]|null  $containers  A list of the packages in this shipment.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly ShipmentDetails $shipmentDetails,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly array $items,
        public readonly ?array $containers = null,
    ) {
    }
}
