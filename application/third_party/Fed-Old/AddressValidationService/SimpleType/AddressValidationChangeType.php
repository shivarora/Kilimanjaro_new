<?php
namespace FedEx\AddressValidationService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationChangeType
    extends AbstractSimpleType
{
    const _APARTMENT_NUMBER_NOT_FOUND = 'APARTMENT_NUMBER_NOT_FOUND';
    const _APARTMENT_NUMBER_REQUIRED = 'APARTMENT_NUMBER_REQUIRED';
    const _NORMALIZED = 'NORMALIZED';
    const _REMOVED_DATA = 'REMOVED_DATA';
    const _BOX_NUMBER_REQUIRED = 'BOX_NUMBER_REQUIRED';
    const _NO_CHANGES = 'NO_CHANGES';
    const _MODIFIED_TO_ACHIEVE_MATCH = 'MODIFIED_TO_ACHIEVE_MATCH';
    const _STREET_RANGE_MATCH = 'STREET_RANGE_MATCH';
    const _BOX_NUMBER_MATCH = 'BOX_NUMBER_MATCH';
    const _RR_OR_HC_MATCH = 'RR_OR_HC_MATCH';
    const _CITY_MATCH = 'CITY_MATCH';
    const _POSTAL_CODE_MATCH = 'POSTAL_CODE_MATCH';
    const _RR_OR_HC_BOX_NUMBER_NEEDED = 'RR_OR_HC_BOX_NUMBER_NEEDED';
    const _FORMATTED_FOR_COUNTRY = 'FORMATTED_FOR_COUNTRY';
    const _APO_OR_FPO_MATCH = 'APO_OR_FPO_MATCH';
    const _GENERAL_DELIVERY_MATCH = 'GENERAL_DELIVERY_MATCH';
    const _FIELD_TRUNCATED = 'FIELD_TRUNCATED';
    const _UNABLE_TO_APPEND_NON_ADDRESS_DATA = 'UNABLE_TO_APPEND_NON_ADDRESS_DATA';
    const _INSUFFICIENT_DATA = 'INSUFFICIENT_DATA';
    const _HOUSE_OR_BOX_NUMBER_NOT_FOUND = 'HOUSE_OR_BOX_NUMBER_NOT_FOUND';
    const _POSTAL_CODE_NOT_FOUND = 'POSTAL_CODE_NOT_FOUND';
    const _INVALID_COUNTRY = 'INVALID_COUNTRY';
    const _SERVICE_UNAVAILABLE_FOR_ADDRESS = 'SERVICE_UNAVAILABLE_FOR_ADDRESS';
}