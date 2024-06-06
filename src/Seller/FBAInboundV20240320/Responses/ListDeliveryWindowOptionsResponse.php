<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\DeliveryWindowOption;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListDeliveryWindowOptionsResponse extends Response
{
    protected static array $complexArrayTypes = ['deliveryWindowOptions' => [DeliveryWindowOption::class]];

    /**
     * @param  DeliveryWindowOption[]  $deliveryWindowOptions  Delivery window options generated for the placement option.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $deliveryWindowOptions,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
