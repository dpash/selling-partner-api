<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto\Pagination;

final class OrderList extends Response
{
    protected static array $complexArrayTypes = ['orders' => [Order::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  Order[]|null  $orders
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $orders = null,
    ) {
    }
}
