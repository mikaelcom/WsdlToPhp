<?php
/**
 * Class file for EbayTradingTypeReviseMyMessagesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseMyMessagesRequestType
 * Documentation : Sets the read state for messages, sets the flagged state of messages, and moves messages into and out of folders.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseMyMessagesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The MessageIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of up to 10 MessageID values. <br><br> MessageIDs must be included in the request. Messages in the Sent box cannot be moved, marked as Read, or Flagged.
	 * @var EbayTradingTypeMyMessagesMessageIDArrayType
	 */
	public $MessageIDs;
	/**
	 * The AlertIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained a list of up to 10 AlertID values. <br><br> Alerts cannot be flagged. Alerts cannot be moved into a new folder until they have been resolved. <br><br> Resolve alerts by marking Read (if no action is required), or by using ActionURL (if action is required).
	 * @var EbayTradingTypeMyMessagesAlertIDArrayType
	 */
	public $AlertIDs;
	/**
	 * The Read
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Changes the read states of all messages specified in a request. At least one of the following must be specified in the request: Read, Flagged, or FolderID. Messages in the Sent box cannot be moved, marked as Read, or Flagged. <br><br> Note that messages retrieved with the API are not automatically marked Read, and must be marked Read with this call.
	 * @var boolean
	 */
	public $Read;
	/**
	 * The Flagged
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Changes the flagged states of all messages specified in a request by their MessageID values. At least one of Read, Flagged, or FolderID must be specified in the request. Messages in the Sent box cannot be moved, marked as Read, or Flagged.
	 * @var boolean
	 */
	public $Flagged;
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies the My Messages folder to move messages into. At least one of Read, Flagged, or FolderID must be specified in the request. <br><br> Messages in the Sent box cannot be moved, marked as Read, or Flagged.
	 * @var long
	 */
	public $FolderID;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesMessageIDArrayType MessageIDs
	 * @param EbayTradingTypeMyMessagesAlertIDArrayType AlertIDs
	 * @param boolean Read
	 * @param boolean Flagged
	 * @param long FolderID
	 * @return EbayTradingTypeReviseMyMessagesRequestType
	 */
	public function __construct($_MessageIDs = null,$_AlertIDs = null,$_Read = null,$_Flagged = null,$_FolderID = null)
	{
		EbayTradingWsdlClass::__construct(array('MessageIDs'=>$_MessageIDs,'AlertIDs'=>$_AlertIDs,'Read'=>$_Read,'Flagged'=>$_Flagged,'FolderID'=>$_FolderID));
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
	 * Set Read
	 * @param boolean Read
	 * @return boolean
	 */
	public function setRead($_Read)
	{
		return ($this->Read = $_Read);
	}
	/**
	 * Get Read
	 * @return boolean
	 */
	public function getRead()
	{
		return $this->Read;
	}
	/**
	 * Set Flagged
	 * @param boolean Flagged
	 * @return boolean
	 */
	public function setFlagged($_Flagged)
	{
		return ($this->Flagged = $_Flagged);
	}
	/**
	 * Get Flagged
	 * @return boolean
	 */
	public function getFlagged()
	{
		return $this->Flagged;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>