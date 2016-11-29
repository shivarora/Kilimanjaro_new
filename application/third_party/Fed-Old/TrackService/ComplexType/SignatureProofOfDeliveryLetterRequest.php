<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Signature Proof Of Delivery Letter request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryLetterRequest
    extends AbstractComplexType
{
    protected $_name = 'SignatureProofOfDeliveryLetterRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @param TransactionDetail $TransactionDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * The version of the request being used.
     *
     * @param VersionId $Version
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $QualifiedTrackingNumber
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setQualifiedTrackingNumber(QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    
    /**
     * Additional customer-supplied text to be added to the body of the letter.
     *
     * @param string $AdditionalComments
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     * Identifies the set of SPOD image types.
     *
     * @param SignatureProofOfDeliveryImageType $LetterFormat
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setLetterFormat(\FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType $letterFormat)
    {
        $this->LetterFormat = $letterFormat;
        return $this;
    }
    
    /**
     * If provided this information will be print on the letter.
     *
     * @param ContactAndAddress $Consignee
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setConsignee(ContactAndAddress $consignee)
    {
        $this->Consignee = $consignee;
        return $this;
    }
    

    
}