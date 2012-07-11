<?php
/**
 * Class file for EbayTradingTypeMyMessagesSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesSummaryType
 * Documentation : Summary data for a given user's alerts and messages. This includes the numbers of new alerts and messages, unresolved alerts, flagged messages, and total alerts and messages.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The FolderSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Folder summary for each folder. Always returned for detail level ReturnSummary.
	 * @var EbayTradingTypeMyMessagesFolderSummaryType
	 */
	public $FolderSummary;
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
	 * 	- documentation : The number of new messages that a given user has. Always returned for detail level ReturnSummary.
	 * @var int
	 */
	public $NewMessageCount;
	/**
	 * The UnresolvedAlertCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of alerts that are not yet resolved. Always returned for detail level ReturnSummary.
	 * @var int
	 */
	public $UnresolvedAlertCount;
	/**
	 * The FlaggedMessageCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of messages that have been flagged. Always returned for detail level ReturnSummary.
	 * @var int
	 */
	public $FlaggedMessageCount;
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
	 * 	- documentation : The total number of messages for a given user. Always returned for detail level ReturnSummary.
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
	 * Constructor
	 * @param EbayTradingTypeMyMessagesFolderSummaryType FolderSummary
	 * @param int NewAlertCount
	 * @param int NewMessageCount
	 * @param int UnresolvedAlertCount
	 * @param int FlaggedMessageCount
	 * @param int TotalAlertCount
	 * @param int TotalMessageCount
	 * @param int NewHighPriorityCount
	 * @param int TotalHighPriorityCount
	 * @return EbayTradingTypeMyMessagesSummaryType
	 */
	public function __construct($_FolderSummary = null,$_NewAlertCount = null,$_NewMessageCount = null,$_UnresolvedAlertCount = null,$_FlaggedMessageCount = null,$_TotalAlertCount = null,$_TotalMessageCount = null,$_NewHighPriorityCount = null,$_TotalHighPriorityCount = null)
	{
		parent::__construct(array('FolderSummary'=>$_FolderSummary,'NewAlertCount'=>$_NewAlertCount,'NewMessageCount'=>$_NewMessageCount,'UnresolvedAlertCount'=>$_UnresolvedAlertCount,'FlaggedMessageCount'=>$_FlaggedMessageCount,'TotalAlertCount'=>$_TotalAlertCount,'TotalMessageCount'=>$_TotalMessageCount,'NewHighPriorityCount'=>$_NewHighPriorityCount,'TotalHighPriorityCount'=>$_TotalHighPriorityCount));
	}
	/**
	 * Set FolderSummary
	 * @param MyMessagesFolderSummaryType FolderSummary
	 * @return MyMessagesFolderSummaryType
	 */
	public function setFolderSummary($_FolderSummary)
	{
		return ($this->FolderSummary = $_FolderSummary);
	}
	/**
	 * Get FolderSummary
	 * @return EbayTradingTypeMyMessagesFolderSummaryType
	 */
	public function getFolderSummary()
	{
		return $this->FolderSummary;
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
	 * Set UnresolvedAlertCount
	 * @param int UnresolvedAlertCount
	 * @return int
	 */
	public function setUnresolvedAlertCount($_UnresolvedAlertCount)
	{
		return ($this->UnresolvedAlertCount = $_UnresolvedAlertCount);
	}
	/**
	 * Get UnresolvedAlertCount
	 * @return int
	 */
	public function getUnresolvedAlertCount()
	{
		return $this->UnresolvedAlertCount;
	}
	/**
	 * Set FlaggedMessageCount
	 * @param int FlaggedMessageCount
	 * @return int
	 */
	public function setFlaggedMessageCount($_FlaggedMessageCount)
	{
		return ($this->FlaggedMessageCount = $_FlaggedMessageCount);
	}
	/**
	 * Get FlaggedMessageCount
	 * @return int
	 */
	public function getFlaggedMessageCount()
	{
		return $this->FlaggedMessageCount;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>