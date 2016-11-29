<?php
namespace FedEx\ShipService\SimpleType;

/**
 * The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values, except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnedRateType
    extends AbstractSimpleType
{
    const _INCENTIVE = 'INCENTIVE';
    const _PAYOR_ACCOUNT_PACKAGE = 'PAYOR_ACCOUNT_PACKAGE';
    const _PAYOR_ACCOUNT_SHIPMENT = 'PAYOR_ACCOUNT_SHIPMENT';
    const _PAYOR_LIST_PACKAGE = 'PAYOR_LIST_PACKAGE';
    const _PAYOR_LIST_SHIPMENT = 'PAYOR_LIST_SHIPMENT';
    const _RATED_ACCOUNT_PACKAGE = 'RATED_ACCOUNT_PACKAGE';
    const _RATED_ACCOUNT_SHIPMENT = 'RATED_ACCOUNT_SHIPMENT';
    const _RATED_LIST_PACKAGE = 'RATED_LIST_PACKAGE';
    const _RATED_LIST_SHIPMENT = 'RATED_LIST_SHIPMENT';
}