<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\EmptyResponse;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ShippingV2\Dto\SubmitNdrFeedbackRequest;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;

/**
 * submitNdrFeedback
 */
class SubmitNdrFeedback extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  SubmitNdrFeedbackRequest  $submitNdrFeedbackRequest  The request schema for the NdrFeedback operation
     */
    public function __construct(
        public SubmitNdrFeedbackRequest $submitNdrFeedbackRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/ndrFeedback';
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitNdrFeedbackRequest->toArray();
    }
}
