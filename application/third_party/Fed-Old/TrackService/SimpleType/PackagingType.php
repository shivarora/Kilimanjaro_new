<?php
namespace FedEx\TrackService\SimpleType;

/**
 * The enumerated packaging type used for this package.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class PackagingType
    extends AbstractSimpleType
{
    const _FEDEX_10KG_BOX = 'FEDEX_10KG_BOX';
    const _FEDEX_25KG_BOX = 'FEDEX_25KG_BOX';
    const _FEDEX_BOX = 'FEDEX_BOX';
    const _FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';
    const _FEDEX_PAK = 'FEDEX_PAK';
    const _FEDEX_TUBE = 'FEDEX_TUBE';
    const _YOUR_PACKAGING = 'YOUR_PACKAGING';
}