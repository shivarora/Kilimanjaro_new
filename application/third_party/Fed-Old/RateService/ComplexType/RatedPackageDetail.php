<?php
namespace FedEx\RateService\ComplexType;

/**
 * If requesting rates using the PackageDetails element (one package at a time) in the request, the rates for each package will be returned in this element. Currently total piece total weight rates are also retuned in this element.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RatedPackageDetail
    extends AbstractComplexType
{
    protected $_name = 'RatedPackageDetail';

    /**
     * Echoed from the corresponding package in the rate request (if provided).
     *
     * @param array[TrackingId] $TrackingIds
     * return RatedPackageDetail
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    
    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param nonNegativeInteger $GroupNumber
     * return RatedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * The difference between "list" and "account" net charge.
     *
     * @param Money $EffectiveNetDiscount
     * return RatedPackageDetail
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Ground COD is shipment level.
     *
     * @param Money $AdjustedCodCollectionAmount
     * return RatedPackageDetail
     */
    public function setAdjustedCodCollectionAmount(Money $adjustedCodCollectionAmount)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    
    /**
     * 
     *
     * @param OversizeClassType $OversizeClass
     * return RatedPackageDetail
     */
    public function setOversizeClass(\FedEx\RateService\SimpleType\OversizeClassType $oversizeClass)
    {
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * Rate data that are tied to a specific package and rate type combination.
     *
     * @param PackageRateDetail $PackageRateDetail
     * return RatedPackageDetail
     */
    public function setPackageRateDetail(PackageRateDetail $packageRateDetail)
    {
        $this->PackageRateDetail = $packageRateDetail;
        return $this;
    }
    

    
}