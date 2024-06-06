<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class InboundShipmentInfo extends Dto
{
    protected static array $attributeMap = [
        'shipFromAddress' => 'ShipFromAddress',
        'shipmentId' => 'ShipmentId',
        'shipmentName' => 'ShipmentName',
        'destinationFulfillmentCenterId' => 'DestinationFulfillmentCenterId',
        'shipmentStatus' => 'ShipmentStatus',
        'labelPrepType' => 'LabelPrepType',
        'areCasesRequired' => 'AreCasesRequired',
        'confirmedNeedByDate' => 'ConfirmedNeedByDate',
        'boxContentsSource' => 'BoxContentsSource',
        'estimatedBoxContentsFee' => 'EstimatedBoxContentsFee',
    ];

    /**
     * @param  Address  $shipFromAddress  Specific details to identify a place.
     * @param  ?string  $shipmentId  The shipment identifier submitted in the request.
     * @param  ?string  $shipmentName  The name for the inbound shipment.
     * @param  ?string  $destinationFulfillmentCenterId  An Amazon fulfillment center identifier created by Amazon.
     * @param  ?string  $shipmentStatus  Indicates the status of the inbound shipment. When used with the createInboundShipment operation, WORKING is the only valid value. When used with the updateInboundShipment operation, possible values are WORKING, SHIPPED or CANCELLED.
     * @param  ?string  $labelPrepType  The type of label preparation that is required for the inbound shipment.
     * @param  ?bool  $areCasesRequired  Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired = true for an inbound shipment, all items in the inbound shipment must be case packed.
     * @param  ?DateTime  $confirmedNeedByDate  Type containing date in string format
     * @param  ?string  $boxContentsSource  Where the seller provided box contents information for a shipment.
     * @param  ?BoxContentsFeeDetails  $estimatedBoxContentsFee  The manual processing fee per unit and total fee for a shipment.
     */
    public function __construct(
        public readonly Address $shipFromAddress,
        public readonly ?string $shipmentId = null,
        public readonly ?string $shipmentName = null,
        public readonly ?string $destinationFulfillmentCenterId = null,
        public readonly ?string $shipmentStatus = null,
        public readonly ?string $labelPrepType = null,
        public readonly ?bool $areCasesRequired = null,
        public readonly ?\DateTime $confirmedNeedByDate = null,
        public readonly ?string $boxContentsSource = null,
        public readonly ?BoxContentsFeeDetails $estimatedBoxContentsFee = null,
    ) {
    }
}
