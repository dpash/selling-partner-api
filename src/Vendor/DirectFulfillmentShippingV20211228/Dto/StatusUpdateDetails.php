<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class StatusUpdateDetails extends Dto
{
    /**
     * @param  string  $trackingNumber  This is required to be provided for every package and should match with the trackingNumber sent for the shipment confirmation.
     * @param  string  $statusCode  Indicates the shipment status code of the package that provides transportation information for Amazon tracking systems and ultimately for the final customer. For more information, refer to the [Additional Fields Explanation](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-shipping-api-use-case-guide#additional-fields-explanation).
     * @param  string  $reasonCode  Provides a reason code for the status of the package that will provide additional information about the transportation status. For more information, refer to the [Additional Fields Explanation](https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-shipping-api-use-case-guide#additional-fields-explanation).
     * @param  DateTime  $statusDateTime  The date and time when the shipment status was updated. This field is expected to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     * @param  Address  $statusLocationAddress  Address of the party.
     * @param  ?ShipmentSchedule  $shipmentSchedule  Details about the estimated delivery window.
     */
    public function __construct(
        public readonly string $trackingNumber,
        public readonly string $statusCode,
        public readonly string $reasonCode,
        public readonly \DateTime $statusDateTime,
        public readonly Address $statusLocationAddress,
        public readonly ?ShipmentSchedule $shipmentSchedule = null,
    ) {
    }
}
