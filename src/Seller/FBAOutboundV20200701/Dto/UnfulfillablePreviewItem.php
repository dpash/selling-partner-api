<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class UnfulfillablePreviewItem extends Dto
{
    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  int  $quantity  The item quantity.
     * @param  string  $sellerFulfillmentOrderItemId  A fulfillment order item identifier created with a call to the `getFulfillmentPreview` operation.
     * @param  ?string[]  $itemUnfulfillableReasons
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly int $quantity,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly ?array $itemUnfulfillableReasons = null,
    ) {
    }
}
