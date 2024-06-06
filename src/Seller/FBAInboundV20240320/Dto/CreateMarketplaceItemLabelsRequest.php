<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class CreateMarketplaceItemLabelsRequest extends Dto
{
    protected static array $complexArrayTypes = ['mskuQuantities' => [MskuQuantity::class]];

    /**
     * @param  string  $labelType  Indicates the type of print type for a given label.
     * @param  string  $marketplaceId  The Marketplace ID. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a list of possible values.
     * @param  MskuQuantity[]  $mskuQuantities  Represents the quantity of an msku to print item labels for.
     * @param  ?float  $height  The height of the item label.
     * @param  ?string  $localeCode  The locale code constructed from ISO 639 language code and ISO 3166-1 alpha-2 standard of country codes separated by an underscore character.
     * @param  ?string  $pageType  The page type to use to print the labels. Possible values: 'A4_21', 'A4_24', 'A4_24_64x33', 'A4_24_66x35', 'A4_24_70x36', 'A4_24_70x37', 'A4_24i', 'A4_27', 'A4_40_52x29', 'A4_44_48x25', 'Letter_30'.
     * @param  ?float  $width  The width of the item label.
     */
    public function __construct(
        public readonly string $labelType,
        public readonly string $marketplaceId,
        public readonly array $mskuQuantities,
        public readonly ?float $height = null,
        public readonly ?string $localeCode = null,
        public readonly ?string $pageType = null,
        public readonly ?float $width = null,
    ) {
    }
}
