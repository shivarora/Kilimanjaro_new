<?php
namespace FedEx\ShipService\ComplexType;

/**
 * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentSpecialServicesRequested
    extends AbstractComplexType
{
    protected $_name = 'ShipmentSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @param array[ShipmentSpecialServiceType] $SpecialServiceTypes
     * return ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. This element is required when SpecialServiceType.COD is present in the SpecialServiceTypes collection.
     *
     * @param CodDetail $CodDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setCodDetail(CodDetail $codDetail)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION is present in the SpecialServiceTypes collection.
     *
     * @param HoldAtLocationDetail $HoldAtLocationDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(HoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for FedEx to provide email notification to the customer regarding the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is present in the SpecialServiceTypes collection.
     *
     * @param EMailNotificationDetail $EMailNotificationDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail(EMailNotificationDetail $eMailNotificationDetail)
    {
        $this->EMailNotificationDetail = $eMailNotificationDetail;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx Printed Return Label. This element is required when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection
     *
     * @param ReturnShipmentDetail $ReturnShipmentDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(ReturnShipmentDetail $returnShipmentDetail)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    
    /**
     * This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @param PendingShipmentDetail $PendingShipmentDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(PendingShipmentDetail $pendingShipmentDetail)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    
    /**
     * Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
     *
     * @param ShipmentDryIceDetail $ShipmentDryIceDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(ShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx Home Delivery options. This element is required when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes collection
     *
     * @param HomeDeliveryPremiumDetail $HomeDeliveryPremiumDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param FreightGuaranteeDetail $FreightGuaranteeDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(FreightGuaranteeDetail $freightGuaranteeDetail)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    
    /**
     * Electronic Trade document references.
     *
     * @param EtdDetail $EtdDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(EtdDetail $etdDetail)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    
    /**
     * Specification for date or range of dates on which delivery is to be attempted.
     *
     * @param CustomDeliveryWindowDetail $CustomDeliveryWindowDetail
     * return ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(CustomDeliveryWindowDetail $customDeliveryWindowDetail)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    

    
}