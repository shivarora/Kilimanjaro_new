<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the delivery signature services options offered by FedEx.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class SignatureOptionType
    extends AbstractSimpleType
{
    const _ADULT = 'ADULT';
    const _DIRECT = 'DIRECT';
    const _INDIRECT = 'INDIRECT';
    const _NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';
    const _SERVICE_DEFAULT = 'SERVICE_DEFAULT';
}