<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class CompetitiveSummaryResponseBody extends Dto
{
    protected static array $complexArrayTypes = [
        'featuredBuyingOptions' => [FeaturedBuyingOption::class],
        'lowestPricedOffers' => [LowestPricedOffer::class],
        'referencePrices' => [ReferencePrice::class],
        'errors' => [Error::class],
    ];

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which data is returned.
     * @param  FeaturedBuyingOption[]|null  $featuredBuyingOptions  A list of featured buying options for the given ASIN `marketplaceId` combination.
     * @param  LowestPricedOffer[]|null  $lowestPricedOffers  A list of the lowest priced offers for the given ASIN `marketplaceId` combination.
     * @param  ReferencePrice[]|null  $referencePrices  A list of reference prices for the given ASIN `marketplaceId` combination.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $marketplaceId,
        public readonly ?array $featuredBuyingOptions = null,
        public readonly ?array $lowestPricedOffers = null,
        public readonly ?array $referencePrices = null,
        public readonly ?array $errors = null,
    ) {
    }
}
