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
class NaftaProducerSpecificationType
    extends AbstractSimpleType
{
    const _AVAILABLE_UPON_REQUEST = 'AVAILABLE_UPON_REQUEST';
    const _MULTIPLE_SPECIFIED = 'MULTIPLE_SPECIFIED';
    const _SAME = 'SAME';
    const _SINGLE_SPECIFIED = 'SINGLE_SPECIFIED';
    const _UNKNOWN = 'UNKNOWN';
}