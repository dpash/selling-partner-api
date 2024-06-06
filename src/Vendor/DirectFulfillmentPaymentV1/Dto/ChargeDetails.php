<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class ChargeDetails extends Dto
{
    protected static array $complexArrayTypes = ['taxDetails' => [TaxDetail::class]];

    /**
     * @param  string  $type  Type of charge applied.
     * @param  Money  $chargeAmount  An amount of money, including units in the form of currency.
     * @param  TaxDetail[]|null  $taxDetails  Individual tax details per line item.
     */
    public function __construct(
        public readonly string $type,
        public readonly Money $chargeAmount,
        public readonly ?array $taxDetails = null,
    ) {
    }
}
