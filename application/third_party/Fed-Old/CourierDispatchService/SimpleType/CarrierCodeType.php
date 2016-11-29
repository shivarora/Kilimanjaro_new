<?php
namespace FedEx\CourierDispatchService\SimpleType;

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CarrierCodeType
    extends AbstractSimpleType
{
    const _FDXE = 'FDXE';
    const _FDXG = 'FDXG';
    const _FDXC = 'FDXC';
    const _FXCC = 'FXCC';
    const _FXFR = 'FXFR';
}