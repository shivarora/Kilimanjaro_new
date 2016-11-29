<?php
namespace FedEx\RateService\ComplexType;

/**
 * This class describes the pickup characteristics of a shipment (e.g. for use in a tag request).
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class PickupDetail
    extends AbstractComplexType
{
    protected $_name = 'PickupDetail';

    /**
     * 
     *
     * @param dateTime $ReadyDateTime
     * return PickupDetail
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $LatestPickupDateTime
     * return PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime)
    {
        $this->LatestPickupDateTime = $latestPickupDateTime;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CourierInstructions
     * return PickupDetail
     */
    public function setCourierInstructions($courierInstructions)
    {
        $this->CourierInstructions = $courierInstructions;
        return $this;
    }
    
    /**
     * 
     *
     * @param PickupRequestType $RequestType
     * return PickupDetail
     */
    public function setRequestType(\FedEx\RateService\SimpleType\PickupRequestType $requestType)
    {
        $this->RequestType = $requestType;
        return $this;
    }
    
    /**
     * 
     *
     * @param PickupRequestSourceType $RequestSource
     * return PickupDetail
     */
    public function setRequestSource(\FedEx\RateService\SimpleType\PickupRequestSourceType $requestSource)
    {
        $this->RequestSource = $requestSource;
        return $this;
    }
    

    
}