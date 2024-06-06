<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class PatchOperation extends Dto
{
    /**
     * @param  string  $op  Type of JSON Patch operation. Supported JSON Patch operations include add, replace, and delete. Refer to [JavaScript Object Notation (JSON) Patch](https://tools.ietf.org/html/rfc6902) for more information.
     * @param  string  $path  JSON Pointer path of the element to patch. Refer to [JavaScript Object Notation (JSON) Patch](https://tools.ietf.org/html/rfc6902) for more information.
     * @param  mixed[][]|null  $value  JSON value to add, replace, or delete.
     */
    public function __construct(
        public readonly string $op,
        public readonly string $path,
        public readonly ?array $value = null,
    ) {
    }
}
