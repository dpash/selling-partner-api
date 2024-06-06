<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ListInboundPlanPalletsResponse;

/**
 * listInboundPlanPallets
 */
class ListInboundPlanPallets extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ?int  $pageSize  The number of pallets to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected ?int $pageSize = null,
        protected ?string $paginationToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['pageSize' => $this->pageSize, 'paginationToken' => $this->paginationToken]);
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/pallets";
    }

    public function createDtoFromResponse(Response $response): ListInboundPlanPalletsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListInboundPlanPalletsResponse::class,
            400, 404, 500, 403, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
