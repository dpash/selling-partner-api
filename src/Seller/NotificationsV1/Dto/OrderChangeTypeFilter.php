<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class OrderChangeTypeFilter extends Dto
{
    /**
     * @param  ?string[]  $orderChangeTypes  A list of order change types to subscribe to (for example: `BuyerRequestedChange`). To receive notifications of all change types, do not provide this list.
     */
    public function __construct(
        public readonly ?array $orderChangeTypes = null,
    ) {
    }
}
