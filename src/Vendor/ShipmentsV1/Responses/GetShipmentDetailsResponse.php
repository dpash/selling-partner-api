<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\Error;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\ShipmentDetails;

final class GetShipmentDetailsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ShipmentDetails  $payload  The request schema for the GetShipmentDetails operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ShipmentDetails $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
