<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ContactInformation extends Dto
{
    /**
     * @param  string  $name  The contact's name.
     * @param  string  $phoneNumber  The phone number.
     * @param  ?string  $email  The email address.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $phoneNumber,
        public readonly ?string $email = null,
    ) {
    }
}
