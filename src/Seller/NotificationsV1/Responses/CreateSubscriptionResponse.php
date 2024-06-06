<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Error;
use SellingPartnerApi\Seller\NotificationsV1\Dto\Subscription;

final class CreateSubscriptionResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Subscription  $payload  Information about the subscription.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Subscription $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
