<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class AccessPoint extends Dto
{
    protected static array $complexArrayTypes = [
        'exceptionOperatingHours' => [ExceptionOperatingHours::class],
        'standardOperatingHours' => [OperatingHours::class],
    ];

    /**
     * @param  ?string  $accessPointId  Unique identifier for the access point
     * @param  ?string  $name  Name of entity (store/hub etc) where this access point is located
     * @param  ?string  $timezone  Timezone of access point
     * @param  ?string  $type  The type of access point, like counter (HELIX), lockers, etc.
     * @param  ?AccessibilityAttributes  $accessibilityAttributes  Defines the accessibility details of the access point.
     * @param  ?Address  $address  The address.
     * @param  ExceptionOperatingHours[]|null  $exceptionOperatingHours
     * @param  ?string  $assistanceType
     * @param  ?string  $score  The score of access point, based on proximity to postal code and sorting preference. This can be used to sort access point results on shipper's end.
     * @param  ?OperatingHours[]  $standardOperatingHours  Map of day of the week to operating hours of that day
     */
    public function __construct(
        public readonly ?string $accessPointId = null,
        public readonly ?string $name = null,
        public readonly ?string $timezone = null,
        public readonly ?string $type = null,
        public readonly ?AccessibilityAttributes $accessibilityAttributes = null,
        public readonly ?Address $address = null,
        public readonly ?array $exceptionOperatingHours = null,
        public readonly ?string $assistanceType = null,
        public readonly ?string $score = null,
        public readonly ?array $standardOperatingHours = null,
    ) {
    }
}
