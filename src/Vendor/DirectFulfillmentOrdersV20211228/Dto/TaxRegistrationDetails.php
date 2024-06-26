<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;

final class TaxRegistrationDetails extends Dto
{
    /**
     * @param  string  $taxRegistrationNumber  Tax registration number for the party. For example, VAT ID.
     * @param  ?string  $taxRegistrationType  Tax registration type for the entity.
     * @param  ?Address  $taxRegistrationAddress  Address of the party.
     * @param  ?string  $taxRegistrationMessages  Tax registration message that can be used for additional tax related details.
     */
    public function __construct(
        public readonly string $taxRegistrationNumber,
        public readonly ?string $taxRegistrationType = null,
        public readonly ?Address $taxRegistrationAddress = null,
        public readonly ?string $taxRegistrationMessages = null,
    ) {
    }
}
