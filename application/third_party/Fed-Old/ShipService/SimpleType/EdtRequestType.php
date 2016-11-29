<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Specifies the types of Estimated Duties and Taxes to be included in a rate quotation for an international shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EdtRequestType
    extends AbstractSimpleType
{
    const _ALL = 'ALL';
    const _NONE = 'NONE';
}