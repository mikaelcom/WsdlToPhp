<?php
/**
 * Class file for EbayTradingTypeGetMyMessagesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyMessagesRequestType
 * Documentation : Retrieves information about the messages sent to a given user.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyMessagesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AlertIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container was deprecated with 685 release. Alerts are now synonymous with Flagged messages.
	 * @var EbayTradingTypeMyMessagesAlertIDArrayType
	 */
	public $AlertIDs;
	/**
	 * The MessageIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of one to 10 MessageID fields.
	 * @var EbayTradingTypeMyMessagesMessageIDArrayType
	 */
	public $MessageIDs;
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for a My Messages folder. If a FolderID is provided, only messages from the specified folder are returned in the response.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The beginning of the date-range filter. Filtering takes into account the entire timestamp of when messages were sent. Messages expire after one year.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The end of the date-range filter. See StartTime (which is the beginning of the date-range filter).
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The ExternalMessageIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is currently available on the US site. A container for IDs that uniquely identify messages for a given user. If provided at the time of message creation, this ID can be used to retrieve messages and will take precedence over message ID.
	 * @var EbayTradingTypeMyMessagesExternalMessageIDArrayType
	 */
	public $ExternalMessageIDs;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how to create virtual pages in the returned list (such as total number of entries and total number of pages to return). Default for EntriesPerPage with GetMyMessages is 25.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The IncludeHighPriorityMessageOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If this field is included in the requst and set to True, only High Priority messages are returned in the response.
	 * @var boolean
	 */
	public $IncludeHighPriorityMessageOnly;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesAlertIDArrayType AlertIDs
	 * @param EbayTradingTypeMyMessagesMessageIDArrayType MessageIDs
	 * @param long FolderID
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param EbayTradingTypeMyMessagesExternalMessageIDArrayType ExternalMessageIDs
	 * @param EbayTradingTypePaginationType Pagination
	 * @param boolean IncludeHighPriorityMessageOnly
	 * @return EbayTradingTypeGetMyMessagesRequestType
	 */
	public function __construct($_AlertIDs = null,$_MessageIDs = null,$_FolderID = null,$_StartTime = null,$_EndTime = null,$_ExternalMessageIDs = null,$_Pagination = null,$_IncludeHighPriorityMessageOnly = null)
	{
		EbayTradingWsdlClass::__construct(array('AlertIDs'=>$_AlertIDs,'MessageIDs'=>$_MessageIDs,'FolderID'=>$_FolderID,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'ExternalMessageIDs'=>$_ExternalMessageIDs,'Pagination'=>$_Pagination,'IncludeHighPriorityMessageOnly'=>$_IncludeHighPriorityMessageOnly));
	}
	/**
	 * Set AlertIDs
	 * @param MyMessagesAlertIDArrayType AlertIDs
	 * @return MyMessagesAlertIDArrayType
	 */
	public function setAlertIDs($_AlertIDs)
	{
		return ($this->AlertIDs = $_AlertIDs);
	}
	/**
	 * Get AlertIDs
	 * @return EbayTradingTypeMyMessagesAlertIDArrayType
	 */
	public function getAlertIDs()
	{
		return $this->AlertIDs;
	}
	/**
	 * Set MessageIDs
	 * @param MyMessagesMessageIDArrayType MessageIDs
	 * @return MyMessagesMessageIDArrayType
	 */
	public function setMessageIDs($_MessageIDs)
	{
		return ($this->MessageIDs = $_MessageIDs);
	}
	/**
	 * Get MessageIDs
	 * @return EbayTradingTypeMyMessagesMessageIDArrayType
	 */
	public function getMessageIDs()
	{
		return $this->MessageIDs;
	}
	/**
	 * Set FolderID
	 * @param long FolderID
	 * @return long
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return long
	 */
	public function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set ExternalMessageIDs
	 * @param MyMessagesExternalMessageIDArrayType ExternalMessageIDs
	 * @return MyMessagesExternalMessageIDArrayType
	 */
	public function setExternalMessageIDs($_ExternalMessageIDs)
	{
		return ($this->ExternalMessageIDs = $_ExternalMessageIDs);
	}
	/**
	 * Get ExternalMessageIDs
	 * @return EbayTradingTypeMyMessagesExternalMessageIDArrayType
	 */
	public function getExternalMessageIDs()
	{
		return $this->ExternalMessageIDs;
	}
	/**
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * Set IncludeHighPriorityMessageOnly
	 * @param boolean IncludeHighPriorityMessageOnly
	 * @return boolean
	 */
	public function setIncludeHighPriorityMessageOnly($_IncludeHighPriorityMessageOnly)
	{
		return ($this->IncludeHighPriorityMessageOnly = $_IncludeHighPriorityMessageOnly);
	}
	/**
	 * Get IncludeHighPriorityMessageOnly
	 * @return boolean
	 */
	public function getIncludeHighPriorityMessageOnly()
	{
		return $this->IncludeHighPriorityMessageOnly;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>