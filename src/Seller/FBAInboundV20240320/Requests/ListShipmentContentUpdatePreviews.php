<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ListShipmentContentUpdatePreviewsResponse;

/**
 * listShipmentContentUpdatePreviews
 */
class ListShipmentContentUpdatePreviews extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?int  $pageSize  The number of content update previews to return.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected string $shipmentId,
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
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}/contentUpdatePreviews";
    }

    public function createDtoFromResponse(Response $response): ListShipmentContentUpdatePreviewsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListShipmentContentUpdatePreviewsResponse::class,
            400, 404, 500, 403, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
