<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\Error;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFeatureInventoryResult;

final class GetFeatureInventoryResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetFeatureInventoryResult  $payload  The payload for the `getEligibileInventory` operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetFeatureInventoryResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
