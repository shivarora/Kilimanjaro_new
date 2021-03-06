<?php
namespace FedEx\UploadDocumentService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentType
    extends AbstractSimpleType
{
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _ETD_LABEL = 'ETD_LABEL';
    const _NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    const _OTHER = 'OTHER';
    const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
}