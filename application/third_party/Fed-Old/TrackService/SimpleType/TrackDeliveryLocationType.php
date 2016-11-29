<?php
namespace FedEx\TrackService\SimpleType;

/**
 * The delivery location at the delivered to address.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackDeliveryLocationType
    extends AbstractSimpleType
{
    const _FEDEX_LOCATION = 'FEDEX_LOCATION';
    const _GUARD_OR_SECURITY_STATION = 'GUARD_OR_SECURITY_STATION';
    const _IN_BOND_OR_CAGE = 'IN_BOND_OR_CAGE';
    const _MAILROOM = 'MAILROOM';
    const _OTHER = 'OTHER';
    const _PHARMACY = 'PHARMACY';
    const _RECEPTIONIST_OR_FRONT_DESK = 'RECEPTIONIST_OR_FRONT_DESK';
    const _RESIDENCE = 'RESIDENCE';
    const _SHIPPING_RECEIVING = 'SHIPPING_RECEIVING';
}