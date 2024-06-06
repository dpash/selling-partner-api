<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class CompetitiveSummaryRequest extends Dto
{
    protected static array $complexArrayTypes = ['lowestPricedOffersInputs' => [LowestPricedOffersInput::class]];

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which data is returned.
     * @param  string[]  $includedData  The list of requested competitive pricing data for the product.
     * @param  string  $method  The HTTP method associated with an individual request within a batch.
     * @param  string  $uri  The URI associated with the individual APIs being called as part of the batch request.
     * @param  LowestPricedOffersInput[]|null  $lowestPricedOffersInputs  The list of `lowestPricedOffersInput` parameters used to build the `lowestPricedOffers` in the response. This attribute is valid only if `lowestPricedOffers` is requested in `includedData`.
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $marketplaceId,
        public readonly array $includedData,
        public readonly string $method,
        public readonly string $uri,
        public readonly ?array $lowestPricedOffersInputs = null,
    ) {
    }
}
