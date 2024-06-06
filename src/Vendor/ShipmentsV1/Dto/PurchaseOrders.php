<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class PurchaseOrders extends Dto
{
    protected static array $complexArrayTypes = ['items' => [PurchaseOrderItems::class]];

    /**
     * @param  ?string  $purchaseOrderNumber  Purchase order numbers involved in this shipment, list all the PO that are involved as part of this shipment.
     * @param  ?DateTime  $purchaseOrderDate  Purchase order numbers involved in this shipment, list all the PO that are involved as part of this shipment.
     * @param  ?string  $shipWindow  Date range in which shipment is expected for these purchase orders.
     * @param  PurchaseOrderItems[]|null  $items  A list of the items that are associated to the PO in this transport and their associated details.
     */
    public function __construct(
        public readonly ?string $purchaseOrderNumber = null,
        public readonly ?\DateTime $purchaseOrderDate = null,
        public readonly ?string $shipWindow = null,
        public readonly ?array $items = null,
    ) {
    }
}
