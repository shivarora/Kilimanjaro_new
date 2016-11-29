<?php
namespace FedEx\ReturnTagService\ComplexType;

/**
 * FedEx Express Tag Availability request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class ExpressTagAvailabilityRequest
    extends AbstractComplexType
{
    protected $_name = 'ExpressTagAvailabilityRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return ExpressTagAvailabilityRequest
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
     * return ExpressTagAvailabilityRequest
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
     * return ExpressTagAvailabilityRequest
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
     * return ExpressTagAvailabilityRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Package ready date and time.
     *
     * @param dateTime $ReadyDateTime
     * return ExpressTagAvailabilityRequest
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * Sender postal code and country.
     *
     * @param Address $OriginAddress
     * return ExpressTagAvailabilityRequest
     */
    public function setOriginAddress(Address $originAddress)
    {
        $this->OriginAddress = $originAddress;
        return $this;
    }
    
    /**
     * FedEx Service type.
     *
     * @param ServiceType $Service
     * return ExpressTagAvailabilityRequest
     */
    public function setService(\FedEx\ReturnTagService\SimpleType\ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * FedEx Packaging type.
     *
     * @param PackagingType $Packaging
     * return ExpressTagAvailabilityRequest
     */
    public function setPackaging(\FedEx\ReturnTagService\SimpleType\PackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    

    
}