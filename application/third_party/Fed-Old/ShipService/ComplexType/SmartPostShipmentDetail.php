<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class SmartPostShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'SmartPostShipmentDetail';

    /**
     * 
     *
     * @param SmartPostIndiciaType $Indicia
     * return SmartPostShipmentDetail
     */
    public function setIndicia(\FedEx\ShipService\SimpleType\SmartPostIndiciaType $indicia)
    {
        $this->Indicia = $indicia;
        return $this;
    }
    
    /**
     * 
     *
     * @param SmartPostAncillaryEndorsementType $AncillaryEndorsement
     * return SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement(\FedEx\ShipService\SimpleType\SmartPostAncillaryEndorsementType $ancillaryEndorsement)
    {
        $this->AncillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $HubId
     * return SmartPostShipmentDetail
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * 
                The CustomerManifestId is used to group Smart Post packages onto a manifest for each trailer that is being prepared. If you do not have multiple trailers this field can be omitted. If you have multiple trailers, you
                must assign the same Manifest Id to each SmartPost package as determined by its trailer.  In other words, all packages on a trailer must have the same Customer Manifest Id. The manifest Id must be unique to your account number for a minimum of 6 months
                and cannot exceed 8 characters in length. We recommend you use the day of year + the trailer id (this could simply be a sequential number for that trailer). So if you had 3 trailers that you started loading on Feb 10
                the 3 manifest ids would be 041001, 041002, 041003 (in this case we used leading zeros on the trailer numbers).
              
     *
     * @param string $CustomerManifestId
     * return SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    

    
}