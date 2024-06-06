<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\Error;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\PackingSlip;

final class GetPackingSlipResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?PackingSlip  $payload  Packing slip information.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?PackingSlip $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
