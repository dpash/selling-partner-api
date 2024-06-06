<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class BoxUpdateInput extends Dto
{
    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  string  $contentInformationSource  Indication of how box content is meant to be provided.
     * @param  Dimensions  $dimensions  Measurement of a package's dimensions.
     * @param  int  $quantity  The number of containers where all other properties like weight or dimensions are identical.
     * @param  Weight  $weight  The weight of a package.
     * @param  Item[]|null  $items  Items contained within the box.
     * @param  ?string  $packageId  Primary key to uniquely identify a Box Package. PackageId must be provided if the intent is to update an existing box. Adding a new box will not require providing this value. Any existing PackageIds not provided will be treated as to-be-removed
     */
    public function __construct(
        public readonly string $contentInformationSource,
        public readonly Dimensions $dimensions,
        public readonly int $quantity,
        public readonly Weight $weight,
        public readonly ?array $items = null,
        public readonly ?string $packageId = null,
    ) {
    }
}
