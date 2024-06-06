<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class SegmentedFeaturedOffer extends Dto
{
    protected static array $complexArrayTypes = [
        'featuredOfferSegments' => [FeaturedOfferSegment::class],
        'shippingOptions' => [ShippingOption::class],
    ];

    /**
     * @param  string  $sellerId  The seller identifier for the offer.
     * @param  string  $condition  The condition of the item.
     * @param  string  $fulfillmentType  Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
     * @param  MoneyType  $listingPrice  Currency type and monetary value. Schema for demonstrating pricing info.
     * @param  FeaturedOfferSegment[]  $featuredOfferSegments  The list of segment information in which the offer is featured.
     * @param  ?string  $subCondition  The item subcondition for the offer.
     * @param  ShippingOption[]|null  $shippingOptions  A list of shipping options associated with this offer
     * @param  ?Points  $points  The number of Amazon Points offered with the purchase of an item, and their monetary value.
     * @param  ?PrimeDetails  $primeDetails  Amazon Prime details.
     */
    public function __construct(
        public readonly string $sellerId,
        public readonly string $condition,
        public readonly string $fulfillmentType,
        public readonly MoneyType $listingPrice,
        public readonly array $featuredOfferSegments,
        public readonly ?string $subCondition = null,
        public readonly ?array $shippingOptions = null,
        public readonly ?Points $points = null,
        public readonly ?PrimeDetails $primeDetails = null,
    ) {
    }
}
