<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Rate extends Dto
{
    protected static array $complexArrayTypes = [
        'supportedDocumentSpecifications' => [SupportedDocumentSpecification::class],
        'availableValueAddedServiceGroups' => [AvailableValueAddedServiceGroup::class],
        'rateItemList' => [RateItem::class],
    ];

    /**
     * @param  string  $rateId  An identifier for the rate (shipment offering) provided by a shipping service provider.
     * @param  string  $carrierId  The carrier identifier for the offering, provided by the carrier.
     * @param  string  $carrierName  The carrier name for the offering.
     * @param  string  $serviceId  An identifier for the shipping service.
     * @param  string  $serviceName  The name of the shipping service.
     * @param  Currency  $totalCharge  The monetary value in the currency indicated, in ISO 4217 standard format.
     * @param  Promise  $promise  The time windows promised for pickup and delivery events.
     * @param  SupportedDocumentSpecification[]  $supportedDocumentSpecifications  A list of the document specifications supported for a shipment service offering.
     * @param  bool  $requiresAdditionalInputs  When true, indicates that additional inputs are required to purchase this shipment service. You must then call the getAdditionalInputs operation to return the JSON schema to use when providing the additional inputs to the purchaseShipment operation.
     * @param  ?Weight  $billedWeight  The weight in the units indicated.
     * @param  AvailableValueAddedServiceGroup[]|null  $availableValueAddedServiceGroups  A list of value-added services available for a shipping service offering.
     * @param  RateItem[]|null  $rateItemList  A list of RateItem
     * @param  ?string  $paymentType  Payment type of the purchase.
     * @param  ?Benefits  $benefits  Representing the included/excluded benefits that we offer for each ShippingOffering/Rate. Benefits being services provided by Amazon when sellers purchase shipping through Amazon.
     */
    public function __construct(
        public readonly string $rateId,
        public readonly string $carrierId,
        public readonly string $carrierName,
        public readonly string $serviceId,
        public readonly string $serviceName,
        public readonly Currency $totalCharge,
        public readonly Promise $promise,
        public readonly array $supportedDocumentSpecifications,
        public readonly bool $requiresAdditionalInputs,
        public readonly ?Weight $billedWeight = null,
        public readonly ?array $availableValueAddedServiceGroups = null,
        public readonly ?array $rateItemList = null,
        public readonly ?string $paymentType = null,
        public readonly ?Benefits $benefits = null,
    ) {
    }
}
