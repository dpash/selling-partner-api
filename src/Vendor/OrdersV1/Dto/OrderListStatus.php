<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderListStatus extends Dto
{
    protected static array $complexArrayTypes = ['ordersStatus' => [OrderStatus::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  OrderStatus[]|null  $ordersStatus
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $ordersStatus = null,
    ) {
    }
}
