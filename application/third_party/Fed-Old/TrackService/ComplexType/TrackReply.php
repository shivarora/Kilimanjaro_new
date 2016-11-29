<?php
namespace FedEx\TrackService\ComplexType;

/**
 * The descriptive data returned from a FedEx package tracking request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackReply
    extends AbstractComplexType
{
    protected $_name = 'TrackReply';

    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return TrackReply
     */
    public function setHighestSeverity(\FedEx\TrackService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @param array[Notification] $Notifications
     * return TrackReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     *
     * @param TransactionDetail $TransactionDetail
     * return TrackReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Contains the version of the reply being used.
     *
     * @param VersionId $Version
     * return TrackReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * True if duplicate packages (more than one package with the same tracking number) have been found, and only limited data will be provided for each one.
     *
     * @param boolean $DuplicateWaybill
     * return TrackReply
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    
    /**
     * True if additional packages remain to be retrieved.
     *
     * @param boolean $MoreData
     * return TrackReply
     */
    public function setMoreData($moreData)
    {
        $this->MoreData = $moreData;
        return $this;
    }
    
    /**
     * Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     *
     * @param string $PagingToken
     * return TrackReply
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Contains detailed tracking information for the requested packages(s).
     *
     * @param array[TrackDetail] $TrackDetails
     * return TrackReply
     */
    public function setTrackDetails(array $trackDetails)
    {
        $this->TrackDetails = $trackDetails;
        return $this;
    }
    

    
}