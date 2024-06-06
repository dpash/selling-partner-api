<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class DestinationResource extends Dto
{
    /**
     * @param  ?SqsResource  $sqs  The information required to create an Amazon Simple Queue Service (Amazon SQS) queue destination.
     * @param  ?EventBridgeResource  $eventBridge  The Amazon EventBridge destination.
     */
    public function __construct(
        public readonly ?SqsResource $sqs = null,
        public readonly ?EventBridgeResource $eventBridge = null,
    ) {
    }
}
