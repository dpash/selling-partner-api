<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class OneClickShipmentRequest extends Dto
{
    protected static array $complexArrayTypes = [
        'packages' => [Package::class],
        'valueAddedServicesDetails' => [OneClickShipmentValueAddedService::class],
        'taxDetails' => [TaxDetail::class],
    ];

    /**
     * @param  Address  $shipFrom  The address.
     * @param  Package[]  $packages  A list of packages to be shipped through a shipping service offering.
     * @param  ChannelDetails  $channelDetails  Shipment source channel related information.
     * @param  RequestedDocumentSpecification  $labelSpecifications  The document specifications requested. For calls to the purchaseShipment operation, the shipment purchase fails if the specified document specifications are not among those returned in the response to the getRates operation.
     * @param  ServiceSelection  $serviceSelection  Service Selection Criteria.
     * @param  ?Address  $shipTo  The address.
     * @param  ?Address  $returnTo  The address.
     * @param  ?DateTime  $shipDate  The ship date and time (the requested pickup). This defaults to the current date and time.
     * @param  OneClickShipmentValueAddedService[]|null  $valueAddedServicesDetails  The value-added services to be added to a shipping service purchase.
     * @param  TaxDetail[]|null  $taxDetails  A list of tax detail information.
     * @param  ?ShipperInstruction  $shipperInstruction  The shipper instruction.
     * @param  ?AccessPointDetails  $destinationAccessPointDetails
     */
    public function __construct(
        public readonly Address $shipFrom,
        public readonly array $packages,
        public readonly ChannelDetails $channelDetails,
        public readonly RequestedDocumentSpecification $labelSpecifications,
        public readonly ServiceSelection $serviceSelection,
        public readonly ?Address $shipTo = null,
        public readonly ?Address $returnTo = null,
        public readonly ?\DateTime $shipDate = null,
        public readonly ?array $valueAddedServicesDetails = null,
        public readonly ?array $taxDetails = null,
        public readonly ?ShipperInstruction $shipperInstruction = null,
        public readonly ?AccessPointDetails $destinationAccessPointDetails = null,
    ) {
    }
}
