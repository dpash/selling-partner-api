<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderDetails extends Dto
{
    protected static array $complexArrayTypes = ['items' => [OrderItem::class]];

    /**
     * @param  string  $customerOrderNumber  The customer order number.
     * @param  DateTime  $orderDate  The date the order was placed. This field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     * @param  ShipmentDetails  $shipmentDetails  Shipment details required for the shipment.
     * @param  Address  $shipToParty  Address of the party.
     * @param  OrderItem[]  $items  A list of items in this purchase order.
     * @param  ?string  $orderStatus  Current status of the order.
     * @param  ?TaxTotal  $taxTotal
     */
    public function __construct(
        public readonly string $customerOrderNumber,
        public readonly \DateTime $orderDate,
        public readonly ShipmentDetails $shipmentDetails,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly Address $shipToParty,
        public readonly PartyIdentification $billToParty,
        public readonly array $items,
        public readonly ?string $orderStatus = null,
        public readonly ?TaxTotal $taxTotal = null,
    ) {
    }
}
