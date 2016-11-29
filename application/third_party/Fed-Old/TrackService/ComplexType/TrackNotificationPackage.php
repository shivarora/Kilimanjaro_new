<?php
namespace FedEx\TrackService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationPackage
    extends AbstractComplexType
{
    protected $_name = 'TrackNotificationPackage';

    /**
     * FedEx assigned identifier for a package/shipment.
     *
     * @param string $TrackingNumber
     * return TrackNotificationPackage
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @param string $TrackingNumberUniqueIdentifiers
     * return TrackNotificationPackage
     */
    public function setTrackingNumberUniqueIdentifiers($trackingNumberUniqueIdentifiers)
    {
        $this->TrackingNumberUniqueIdentifiers = $trackingNumberUniqueIdentifiers;
        return $this;
    }
    
    /**
     * Identification of a FedEx operating company (transportation).
     *
     * @param CarrierCodeType $CarrierCode
     * return TrackNotificationPackage
     */
    public function setCarrierCode(\FedEx\TrackService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * The date the package was shipped (tendered to FedEx).
     *
     * @param date $ShipDate
     * return TrackNotificationPackage
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * The destination address of this package. Only city, state/province, and country are returned.
     *
     * @param Address $Destination
     * return TrackNotificationPackage
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Options available for a tracking notification recipient.
     *
     * @param array[TrackNotificationRecipientDetail] $RecipientDetails
     * return TrackNotificationPackage
     */
    public function setRecipientDetails(array $recipientDetails)
    {
        $this->RecipientDetails = $recipientDetails;
        return $this;
    }
    

    
}