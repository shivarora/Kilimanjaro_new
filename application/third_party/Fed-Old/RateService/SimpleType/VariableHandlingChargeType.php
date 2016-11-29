<?php
namespace FedEx\RateService\SimpleType;

/**
 * The type of handling charge to be calculated and returned in the reply.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class VariableHandlingChargeType
    extends AbstractSimpleType
{
    const _FIXED_AMOUNT = 'FIXED_AMOUNT';
    const _PERCENTAGE_OF_NET_CHARGE = 'PERCENTAGE_OF_NET_CHARGE';
    const _PERCENTAGE_OF_NET_CHARGE_EXCLUDING_TAXES = 'PERCENTAGE_OF_NET_CHARGE_EXCLUDING_TAXES';
    const _PERCENTAGE_OF_NET_FREIGHT = 'PERCENTAGE_OF_NET_FREIGHT';
}