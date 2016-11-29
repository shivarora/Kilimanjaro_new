<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Track Notification request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationRequest
    extends AbstractComplexType
{
    protected $_name = 'TrackNotificationRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return TrackNotificationRequest
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
     * return TrackNotificationRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations
     *
     * @param TransactionDetail $TransactionDetail
     * return TrackNotificationRequest
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
     * return TrackNotificationRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The tracking number to which the notifications will be triggered from.
     *
     * @param string $TrackingNumber
     * return TrackNotificationRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Indicates whether to return tracking information for all associated packages.
     *
     * @param boolean $MultiPiece
     * return TrackNotificationRequest
     */
    public function setMultiPiece($multiPiece)
    {
        $this->MultiPiece = $multiPiece;
        return $this;
    }
    
    /**
     * When the MoreDataAvailable field is true in a TrackNotificationReply the PagingToken must be sent in the subsequent TrackNotificationRequest to retrieve the next page of data.
     *
     * @param string $PagingToken
     * return TrackNotificationRequest
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Use this field when your original request informs you that there are duplicates of this tracking number. If you get duplicates you will also receive some information about each of the duplicate tracking numbers to enable you to chose one and resend that number along with the TrackingNumberUniqueId to get notifications for that tracking number.
     *
     * @param string $TrackingNumberUniqueId
     * return TrackNotificationRequest
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId)
    {
        $this->TrackingNumberUniqueId = $trackingNumberUniqueId;
        return $this;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $ShipDateRangeBegin
     * return TrackNotificationRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $ShipDateRangeEnd
     * return TrackNotificationRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    
    /**
     * Included in the email notification identifying the requester of this notification.
     *
     * @param string $SenderEMailAddress
     * return TrackNotificationRequest
     */
    public function setSenderEMailAddress($senderEMailAddress)
    {
        $this->SenderEMailAddress = $senderEMailAddress;
        return $this;
    }
    
    /**
     * Included in the email notification identifying the requester of this notification.
     *
     * @param string $SenderContactName
     * return TrackNotificationRequest
     */
    public function setSenderContactName($senderContactName)
    {
        $this->SenderContactName = $senderContactName;
        return $this;
    }
    
    /**
     * Who to send the email notifications to and for which events. The notificationRecipientType and NotifyOnShipment fields are not used in this request.
     *
     * @param EMailNotificationDetail $NotificationDetail
     * return TrackNotificationRequest
     */
    public function setNotificationDetail(EMailNotificationDetail $notificationDetail)
    {
        $this->NotificationDetail = $notificationDetail;
        return $this;
    }
    

    
}