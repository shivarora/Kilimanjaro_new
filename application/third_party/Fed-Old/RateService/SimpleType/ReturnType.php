<?php
namespace FedEx\RateService\SimpleType;

/**
 * The type of return shipment that is being requested.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ReturnType
    extends AbstractSimpleType
{
    const _FEDEX_TAG = 'FEDEX_TAG';
    const _PENDING = 'PENDING';
    const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
}