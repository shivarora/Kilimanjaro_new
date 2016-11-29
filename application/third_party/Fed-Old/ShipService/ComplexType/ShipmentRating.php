<?php
namespace FedEx\ShipService\ComplexType;

/**
 * This class groups together all shipment-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentRating
    extends AbstractComplexType
{
    protected $_name = 'ShipmentRating';

    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     *
     * @param ReturnedRateType $ActualRateType
     * return ShipmentRating
     */
    public function setActualRateType(\FedEx\ShipService\SimpleType\ReturnedRateType $actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * The "list" total net charge minus "actual" total net charge.
     *
     * @param Money $EffectiveNetDiscount
     * return ShipmentRating
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @param array[ShipmentRateDetail] $ShipmentRateDetails
     * return ShipmentRating
     */
    public function setShipmentRateDetails(array $shipmentRateDetails)
    {
        $this->ShipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
    

    
}