<?php
namespace FedEx\ShipService\SimpleType;

/**
 * These values are mutually exclusive; at most one of them can be attached to a SmartPost shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class SmartPostAncillaryEndorsementType
    extends AbstractSimpleType
{
    const _ADDRESS_CORRECTION = 'ADDRESS_CORRECTION';
    const _CARRIER_LEAVE_IF_NO_RESPONSE = 'CARRIER_LEAVE_IF_NO_RESPONSE';
    const _CHANGE_SERVICE = 'CHANGE_SERVICE';
    const _FORWARDING_SERVICE = 'FORWARDING_SERVICE';
    const _RETURN_SERVICE = 'RETURN_SERVICE';
}