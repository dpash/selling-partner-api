<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ApplicationManagementV20231130\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\EmptyResponse;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ApplicationManagementV20231130\Responses\ErrorList;

/**
 * rotateApplicationClientSecret
 */
class RotateApplicationClientSecret extends Request
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/applications/2023-11-30/clientSecret';
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
