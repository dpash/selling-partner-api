<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\FulfillmentAvailability;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\Issue;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\ItemOfferByMarketplace;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\ItemProcurement;
use SellingPartnerApi\Seller\ListingsItemsV20210801\Dto\ItemSummaryByMarketplace;

final class Item extends Response
{
    protected static array $complexArrayTypes = [
        'summaries' => [ItemSummaryByMarketplace::class],
        'issues' => [Issue::class],
        'offers' => [ItemOfferByMarketplace::class],
        'fulfillmentAvailability' => [FulfillmentAvailability::class],
        'procurement' => [ItemProcurement::class],
    ];

    /**
     * @param  string  $sku  A selling partner provided identifier for an Amazon listing.
     * @param  ItemSummaryByMarketplace[]|null  $summaries  Summary details of a listings item.
     * @param  ?mixed[]  $attributes  A JSON object containing structured listings item attribute data keyed by attribute name.
     * @param  Issue[]|null  $issues  The issues associated with the listings item.
     * @param  ItemOfferByMarketplace[]|null  $offers  Offer details for the listings item.
     * @param  FulfillmentAvailability[]|null  $fulfillmentAvailability  The fulfillment availability for the listings item.
     * @param  ItemProcurement[]|null  $procurement  The vendor procurement information for the listings item.
     */
    public function __construct(
        public readonly string $sku,
        public readonly ?array $summaries = null,
        public readonly ?array $attributes = null,
        public readonly ?array $issues = null,
        public readonly ?array $offers = null,
        public readonly ?array $fulfillmentAvailability = null,
        public readonly ?array $procurement = null,
    ) {
    }
}
