<?php
/**
 * Class file for EbayTradingTypeMyMessagesFolderSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesFolderSummaryType
 * Documentation : Summary details for a specified My Messages folder.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesFolderSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies a My Messages folder. Always returned for detail level ReturnSummary.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The FolderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a specified My Messages folder. For GetMyMessages, Inbox (FolderID = 0) and Sent (FolderID = 1) are not returned.
	 * @var string
	 */
	public $FolderName;
	/**
	 * The NewAlertCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field has been deprecated, starting with the 685 release. Alerts are now synonymous with Flagged messages, and are added to the Summary.FlaggedMessageCount value.
	 * @var int
	 */
	public $NewAlertCount;
	/**
	 * The NewMessageCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of new messages in a given folder. Always returned for detail level ReturnSummary.
	 * @var int
	 */
	public $NewMessageCount;
	/**
	 * The TotalAlertCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field has been deprecated, starting with the 685 release. Alerts are now synonymous with Flagged messages, and are added to the Summary.FlaggedMessageCount value.
	 * @var int
	 */
	public $TotalAlertCount;
	/**
	 * The TotalMessageCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of messages in a given folder. Always returned for detail level ReturnSummary.
	 * @var int
	 */
	public $TotalMessageCount;
	/**
	 * The NewHighPriorityCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of new high priority messages that a given user has.
	 * @var int
	 */
	public $NewHighPriorityCount;
	/**
	 * The TotalHighPriorityCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of high priority messages that a given user has.
	 * @var int
	 */
	public $TotalHighPriorityCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long FolderID
	 * @param string FolderName
	 * @param int NewAlertCount
	 * @param int NewMessageCount
	 * @param int TotalAlertCount
	 * @param int TotalMessageCount
	 * @param int NewHighPriorityCount
	 * @param int TotalHighPriorityCount
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyMessagesFolderSummaryType
	 */
	public function __construct($_FolderID = null,$_FolderName = null,$_NewAlertCount = null,$_NewMessageCount = null,$_TotalAlertCount = null,$_TotalMessageCount = null,$_NewHighPriorityCount = null,$_TotalHighPriorityCount = null,$_any = null)
	{
		parent::__construct(array('FolderID'=>$_FolderID,'FolderName'=>$_FolderName,'NewAlertCount'=>$_NewAlertCount,'NewMessageCount'=>$_NewMessageCount,'TotalAlertCount'=>$_TotalAlertCount,'TotalMessageCount'=>$_TotalMessageCount,'NewHighPriorityCount'=>$_NewHighPriorityCount,'TotalHighPriorityCount'=>$_TotalHighPriorityCount,'any'=>$_any));
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
	 * Set FolderName
	 * @param string FolderName
	 * @return string
	 */
	public function setFolderName($_FolderName)
	{
		return ($this->FolderName = $_FolderName);
	}
	/**
	 * Get FolderName
	 * @return string
	 */
	public function getFolderName()
	{
		return $this->FolderName;
	}
	/**
	 * Set NewAlertCount
	 * @param int NewAlertCount
	 * @return int
	 */
	public function setNewAlertCount($_NewAlertCount)
	{
		return ($this->NewAlertCount = $_NewAlertCount);
	}
	/**
	 * Get NewAlertCount
	 * @return int
	 */
	public function getNewAlertCount()
	{
		return $this->NewAlertCount;
	}
	/**
	 * Set NewMessageCount
	 * @param int NewMessageCount
	 * @return int
	 */
	public function setNewMessageCount($_NewMessageCount)
	{
		return ($this->NewMessageCount = $_NewMessageCount);
	}
	/**
	 * Get NewMessageCount
	 * @return int
	 */
	public function getNewMessageCount()
	{
		return $this->NewMessageCount;
	}
	/**
	 * Set TotalAlertCount
	 * @param int TotalAlertCount
	 * @return int
	 */
	public function setTotalAlertCount($_TotalAlertCount)
	{
		return ($this->TotalAlertCount = $_TotalAlertCount);
	}
	/**
	 * Get TotalAlertCount
	 * @return int
	 */
	public function getTotalAlertCount()
	{
		return $this->TotalAlertCount;
	}
	/**
	 * Set TotalMessageCount
	 * @param int TotalMessageCount
	 * @return int
	 */
	public function setTotalMessageCount($_TotalMessageCount)
	{
		return ($this->TotalMessageCount = $_TotalMessageCount);
	}
	/**
	 * Get TotalMessageCount
	 * @return int
	 */
	public function getTotalMessageCount()
	{
		return $this->TotalMessageCount;
	}
	/**
	 * Set NewHighPriorityCount
	 * @param int NewHighPriorityCount
	 * @return int
	 */
	public function setNewHighPriorityCount($_NewHighPriorityCount)
	{
		return ($this->NewHighPriorityCount = $_NewHighPriorityCount);
	}
	/**
	 * Get NewHighPriorityCount
	 * @return int
	 */
	public function getNewHighPriorityCount()
	{
		return $this->NewHighPriorityCount;
	}
	/**
	 * Set TotalHighPriorityCount
	 * @param int TotalHighPriorityCount
	 * @return int
	 */
	public function setTotalHighPriorityCount($_TotalHighPriorityCount)
	{
		return ($this->TotalHighPriorityCount = $_TotalHighPriorityCount);
	}
	/**
	 * Get TotalHighPriorityCount
	 * @return int
	 */
	public function getTotalHighPriorityCount()
	{
		return $this->TotalHighPriorityCount;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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