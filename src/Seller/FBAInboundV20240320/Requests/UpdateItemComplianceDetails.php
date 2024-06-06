<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateItemComplianceDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\UpdateItemComplianceDetailsResponse;

/**
 * updateItemComplianceDetails
 */
class UpdateItemComplianceDetails extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  UpdateItemComplianceDetailsRequest  $updateItemComplianceDetailsRequest  The `updateItemComplianceDetails` request.
     * @param  string  $marketplaceId  The Marketplace ID. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a list of possible values.
     */
    public function __construct(
        public UpdateItemComplianceDetailsRequest $updateItemComplianceDetailsRequest,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return '/inbound/fba/2024-03-20/items/compliance';
    }

    public function createDtoFromResponse(Response $response): UpdateItemComplianceDetailsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => UpdateItemComplianceDetailsResponse::class,
            400, 404, 500, 403, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateItemComplianceDetailsRequest->toArray();
    }
}
