<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderedQuantity extends Dto
{
    protected static array $complexArrayTypes = ['orderedQuantityDetails' => [OrderedQuantityDetails::class]];

    /**
     * @param  ?ItemQuantity  $orderedQuantity  Details of quantity ordered.
     * @param  OrderedQuantityDetails[]|null  $orderedQuantityDetails  Details of item quantity ordered.
     */
    public function __construct(
        public readonly ?ItemQuantity $orderedQuantity = null,
        public readonly ?array $orderedQuantityDetails = null,
    ) {
    }
}
