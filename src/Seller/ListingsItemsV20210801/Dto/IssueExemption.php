<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class IssueExemption extends Dto
{
    /**
     * @param  string  $status  This field indicates the current exemption status for the listed enforcement actions. It can take values such as `EXEMPT`, signifying permanent exemption, `EXEMPT_UNTIL_EXPIRY_DATE` indicating temporary exemption until a specified date, or `NOT_EXEMPT` signifying no exemptions, and enforcement actions were already applied.
     * @param  ?DateTime  $expiryDate  This field represents the timestamp, following the ISO 8601 format, which specifies the date when temporary exemptions, if applicable, will expire, and Amazon will begin enforcing the listed actions.
     */
    public function __construct(
        public readonly string $status,
        public readonly ?\DateTime $expiryDate = null,
    ) {
    }
}
