<?php
namespace FedEx\ShipService\ComplexType;

/**
 * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CertificateOfOriginDetail
    extends AbstractComplexType
{
    protected $_name = 'CertificateOfOriginDetail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $DocumentFormat
     * return CertificateOfOriginDetail
     */
    public function setDocumentFormat(ShippingDocumentFormat $documentFormat)
    {
        $this->DocumentFormat = $documentFormat;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return CertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}