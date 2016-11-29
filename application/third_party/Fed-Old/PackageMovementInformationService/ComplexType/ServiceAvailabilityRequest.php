<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

/**
 * The descriptive data which is used to determine which FedEx Express services are available between an origin and destination. To check the availability of one particular FedEx Express service and packaging type, include the Service and Packaging elements in the request message. Only information regarding that single service and packaging type will be returned from the request. To obtain a list of all available services for a given origin and destination, omit the Service and Packaging elements from the request. In this case the reply will contain every available service.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class ServiceAvailabilityRequest
    extends AbstractComplexType
{
    protected $_name = 'ServiceAvailabilityRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return ServiceAvailabilityRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return ServiceAvailabilityRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return ServiceAvailabilityRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return ServiceAvailabilityRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The descriptive data for the physical location from which the shipment originates.
     *
     * @param Address $Origin
     * return ServiceAvailabilityRequest
     */
    public function setOrigin(Address $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * The descriptive data for the physical location to which the shipment is destined.
     *
     * @param Address $Destination
     * return ServiceAvailabilityRequest
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * The date on which the package will be shipped. The date should not  be a past date or a date more than 10 days in the future. The date format must be YYYY-MM-DD.
     *
     * @param date $ShipDate
     * return ServiceAvailabilityRequest
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Optionally supplied instead of service to restrict reply to services for a specific carrier.
     *
     * @param CarrierCodeType $CarrierCode
     * return ServiceAvailabilityRequest
     */
    public function setCarrierCode(\FedEx\PackageMovementInformationService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Restricts reply to single service, if supplied.
     *
     * @param ServiceType $Service
     * return ServiceAvailabilityRequest
     */
    public function setService(\FedEx\PackageMovementInformationService\SimpleType\ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the FedEx packaging type used by the requestor for the package. See PackagingType for valid values. Omit this element and the Service element to get a list of every available service.
     *
     * @param PackagingType $Packaging
     * return ServiceAvailabilityRequest
     */
    public function setPackaging(\FedEx\PackageMovementInformationService\SimpleType\PackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    

    
}