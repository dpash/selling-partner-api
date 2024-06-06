<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\DataKioskV20231115\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\EmptyResponse;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\ErrorList;

/**
 * cancelQuery
 */
class CancelQuery extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $queryId  The identifier for the query. This identifier is unique only in combination with a selling partner account ID.
     */
    public function __construct(
        protected string $queryId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/dataKiosk/2023-11-15/queries/{$this->queryId}";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
