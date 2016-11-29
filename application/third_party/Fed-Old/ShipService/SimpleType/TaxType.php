<?php
namespace FedEx\ShipService\SimpleType;

/**
 * The type of the tax.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class TaxType
    extends AbstractSimpleType
{
    const _EXPORT = 'EXPORT';
    const _GST = 'GST';
    const _HST = 'HST';
    const _INTRACOUNTRY = 'INTRACOUNTRY';
    const _OTHER = 'OTHER';
    const _PST = 'PST';
    const _VAT = 'VAT';
}