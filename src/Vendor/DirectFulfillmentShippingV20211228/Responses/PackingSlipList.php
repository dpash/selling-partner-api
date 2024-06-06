<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\Pagination;

final class PackingSlipList extends Response
{
    protected static array $complexArrayTypes = ['packingSlips' => [PackingSlip::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  PackingSlip[]|null  $packingSlips
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $packingSlips = null,
    ) {
    }
}
