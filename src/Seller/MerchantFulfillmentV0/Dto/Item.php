<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class Item extends Dto
{
    protected static array $attributeMap = [
        'orderItemId' => 'OrderItemId',
        'quantity' => 'Quantity',
        'itemWeight' => 'ItemWeight',
        'itemDescription' => 'ItemDescription',
        'transparencyCodeList' => 'TransparencyCodeList',
        'itemLevelSellerInputsList' => 'ItemLevelSellerInputsList',
        'liquidVolume' => 'LiquidVolume',
        'isHazmat' => 'IsHazmat',
        'dangerousGoodsDetails' => 'DangerousGoodsDetails',
    ];

    protected static array $complexArrayTypes = ['itemLevelSellerInputsList' => [AdditionalSellerInputs::class]];

    /**
     * @param  string  $orderItemId  An Amazon-defined identifier for an individual item in an order.
     * @param  int  $quantity  The number of items.
     * @param  ?Weight  $itemWeight  The weight.
     * @param  ?string  $itemDescription  The description of the item.
     * @param  ?string[]  $transparencyCodeList  A list of transparency codes.
     * @param  AdditionalSellerInputs[]|null  $itemLevelSellerInputsList  A list of additional seller input pairs required to purchase shipping.
     * @param  ?LiquidVolume  $liquidVolume  Liquid Volume.
     * @param  ?bool  $isHazmat  When true, the item qualifies as hazardous materials (hazmat). Defaults to false.
     * @param  ?DangerousGoodsDetails  $dangerousGoodsDetails  Details related to any dangerous goods/items that are being shipped.
     */
    public function __construct(
        public readonly string $orderItemId,
        public readonly int $quantity,
        public readonly ?Weight $itemWeight = null,
        public readonly ?string $itemDescription = null,
        public readonly ?array $transparencyCodeList = null,
        public readonly ?array $itemLevelSellerInputsList = null,
        public readonly ?LiquidVolume $liquidVolume = null,
        public readonly ?bool $isHazmat = null,
        public readonly ?DangerousGoodsDetails $dangerousGoodsDetails = null,
    ) {
    }
}
