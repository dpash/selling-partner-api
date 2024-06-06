<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\CustomerInvoice;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\Error;

final class GetCustomerInvoiceResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CustomerInvoice  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CustomerInvoice $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
