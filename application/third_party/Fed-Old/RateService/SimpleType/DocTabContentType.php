<?php
namespace FedEx\RateService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class DocTabContentType
    extends AbstractSimpleType
{
    const _BARCODED = 'BARCODED';
    const _MINIMUM = 'MINIMUM';
    const _STANDARD = 'STANDARD';
    const _ZONE001 = 'ZONE001';
}