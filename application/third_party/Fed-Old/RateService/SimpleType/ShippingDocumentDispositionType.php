<?php
namespace FedEx\RateService\SimpleType;

/**
 * Specifies how to return a shipping document to the caller.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ShippingDocumentDispositionType
    extends AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED_RETURNED = 'DEFERRED_RETURNED';
    const _DEFERRED_STORED = 'DEFERRED_STORED';
    const _EMAILED = 'EMAILED';
    const _QUEUED = 'QUEUED';
    const _RETURNED = 'RETURNED';
    const _STORED = 'STORED';
}