<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderDetails extends Dto
{
    protected static array $complexArrayTypes = ['items' => [OrderItem::class]];

    /**
     * @param  DateTime  $purchaseOrderDate  The date the purchase order was placed. Must be in ISO-8601 date/time format.
     * @param  DateTime  $purchaseOrderStateChangedDate  The date when current purchase order state was changed. Current purchase order state is available in the field 'purchaseOrderState'. Must be in ISO-8601 date/time format.
     * @param  OrderItem[]  $items  A list of items in this purchase order.
     * @param  ?DateTime  $purchaseOrderChangedDate  The date when purchase order was last changed by Amazon after the order was placed. This date will be greater than 'purchaseOrderDate'. This means the PO data was changed on that date and vendors are required to fulfill the  updated PO. The PO changes can be related to Item Quantity, Ship to Location, Ship Window etc. This field will not be present in orders that have not changed after creation. Must be in ISO-8601 date/time format.
     * @param  ?string  $purchaseOrderType  Type of purchase order.
     * @param  ?ImportDetails  $importDetails  Import details for an import order.
     * @param  ?string  $dealCode  If requested by the recipient, this field will contain a promotional/deal number. The discount code line is optional. It is used to obtain a price discount on items on the order.
     * @param  ?string  $paymentMethod  Payment method used.
     * @param  ?PartyIdentification  $buyingParty
     * @param  ?PartyIdentification  $sellingParty
     * @param  ?PartyIdentification  $shipToParty
     * @param  ?PartyIdentification  $billToParty
     * @param  ?string  $shipWindow  Defines a date time interval according to ISO8601. Interval is separated by double hyphen (--).
     * @param  ?string  $deliveryWindow  Defines a date time interval according to ISO8601. Interval is separated by double hyphen (--).
     */
    public function __construct(
        public readonly \DateTime $purchaseOrderDate,
        public readonly \DateTime $purchaseOrderStateChangedDate,
        public readonly array $items,
        public readonly ?\DateTime $purchaseOrderChangedDate = null,
        public readonly ?string $purchaseOrderType = null,
        public readonly ?ImportDetails $importDetails = null,
        public readonly ?string $dealCode = null,
        public readonly ?string $paymentMethod = null,
        public readonly ?PartyIdentification $buyingParty = null,
        public readonly ?PartyIdentification $sellingParty = null,
        public readonly ?PartyIdentification $shipToParty = null,
        public readonly ?PartyIdentification $billToParty = null,
        public readonly ?string $shipWindow = null,
        public readonly ?string $deliveryWindow = null,
    ) {
    }
}
