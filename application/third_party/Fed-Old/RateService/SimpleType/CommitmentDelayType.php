<?php
namespace FedEx\RateService\SimpleType;

/**
 * The type of delay this shipment will encounter.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CommitmentDelayType
    extends AbstractSimpleType
{
    const _HOLIDAY = 'HOLIDAY';
    const _NON_WORKDAY = 'NON_WORKDAY';
    const _NO_CITY_DELIVERY = 'NO_CITY_DELIVERY';
    const _NO_HOLD_AT_LOCATION = 'NO_HOLD_AT_LOCATION';
    const _NO_LOCATION_DELIVERY = 'NO_LOCATION_DELIVERY';
    const _NO_SERVICE_AREA_DELIVERY = 'NO_SERVICE_AREA_DELIVERY';
    const _NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY = 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY';
    const _NO_SPECIAL_SERVICE_DELIVERY = 'NO_SPECIAL_SERVICE_DELIVERY';
    const _NO_ZIP_DELIVERY = 'NO_ZIP_DELIVERY';
    const _WEEKEND = 'WEEKEND';
    const _WEEKEND_SPECIAL = 'WEEKEND_SPECIAL';
}