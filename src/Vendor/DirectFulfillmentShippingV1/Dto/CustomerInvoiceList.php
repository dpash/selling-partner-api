<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class CustomerInvoiceList extends Dto
{
    protected static array $complexArrayTypes = ['customerInvoices' => [CustomerInvoice::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  CustomerInvoice[]|null  $customerInvoices
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $customerInvoices = null,
    ) {
    }
}
