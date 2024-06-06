<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class GenerateShipmentContentUpdatePreviewsRequest extends Dto
{
    protected static array $complexArrayTypes = ['boxes' => [BoxUpdateInput::class], 'items' => [Item::class]];

    /**
     * @param  BoxUpdateInput[]  $boxes  A list of boxes that will be present in the shipment after the update.
     * @param  Item[]  $items  Items contained within the box.
     */
    public function __construct(
        public readonly array $boxes,
        public readonly array $items,
    ) {
    }
}
