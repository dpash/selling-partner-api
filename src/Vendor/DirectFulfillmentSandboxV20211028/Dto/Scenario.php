<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use SellingPartnerApi\Dto;

final class Scenario extends Dto
{
    protected static array $complexArrayTypes = ['orders' => [OrderScenarioRequest::class]];

    /**
     * @param  string  $scenarioId  An identifier that identifies the type of scenario that user can use for testing.
     * @param  OrderScenarioRequest[]  $orders  The list of test orders requested as indicated by party identifiers.
     */
    public function __construct(
        public readonly string $scenarioId,
        public readonly array $orders,
    ) {
    }
}
