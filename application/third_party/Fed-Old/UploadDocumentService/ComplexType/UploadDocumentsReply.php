<?php
namespace FedEx\UploadDocumentService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentsReply
    extends AbstractComplexType
{
    protected $_name = 'UploadDocumentsReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply
     *
     * @param NotificationSeverityType $HighestSeverity
     * return UploadDocumentsReply
     */
    public function setHighestSeverity(\FedEx\UploadDocumentService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return UploadDocumentsReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return UploadDocumentsReply
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
     * return UploadDocumentsReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentStatusDetail] $DocumentStatuses
     * return UploadDocumentsReply
     */
    public function setDocumentStatuses(array $documentStatuses)
    {
        $this->DocumentStatuses = $documentStatuses;
        return $this;
    }
    

    
}