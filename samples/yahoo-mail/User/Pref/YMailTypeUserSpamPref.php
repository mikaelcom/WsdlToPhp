<?php
/**
 * Class file for YMailTypeUserSpamPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUserSpamPref
 * @date 02/07/2012
 */
class YMailTypeUserSpamPref extends YMailWsdlClass
{
	/**
	 * The spamGuardPlusEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $spamGuardPlusEnabled;
	/**
	 * The spamFilterActive
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $spamFilterActive;
	/**
	 * The spamMoveToInbox
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $spamMoveToInbox;
	/**
	 * The spamCleanupPeriod
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $spamCleanupPeriod;
	/**
	 * The spamBlockSender
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $spamBlockSender;
	/**
	 * Constructor
	 * @param boolean spamGuardPlusEnabled
	 * @param boolean spamFilterActive
	 * @param boolean spamMoveToInbox
	 * @param int spamCleanupPeriod
	 * @param boolean spamBlockSender
	 * @return YMailTypeUserSpamPref
	 */
	public function __construct($_spamGuardPlusEnabled = null,$_spamFilterActive = null,$_spamMoveToInbox = null,$_spamCleanupPeriod = -1,$_spamBlockSender = null)
	{
		parent::__construct(array('spamGuardPlusEnabled'=>$_spamGuardPlusEnabled,'spamFilterActive'=>$_spamFilterActive,'spamMoveToInbox'=>$_spamMoveToInbox,'spamCleanupPeriod'=>$_spamCleanupPeriod,'spamBlockSender'=>$_spamBlockSender));
	}
	/**
	 * Set spamGuardPlusEnabled
	 * @param boolean spamGuardPlusEnabled
	 * @return boolean
	 */
	public function setSpamGuardPlusEnabled($_spamGuardPlusEnabled)
	{
		return ($this->spamGuardPlusEnabled = $_spamGuardPlusEnabled);
	}
	/**
	 * Get spamGuardPlusEnabled
	 * @return boolean
	 */
	public function getSpamGuardPlusEnabled()
	{
		return $this->spamGuardPlusEnabled;
	}
	/**
	 * Set spamFilterActive
	 * @param boolean spamFilterActive
	 * @return boolean
	 */
	public function setSpamFilterActive($_spamFilterActive)
	{
		return ($this->spamFilterActive = $_spamFilterActive);
	}
	/**
	 * Get spamFilterActive
	 * @return boolean
	 */
	public function getSpamFilterActive()
	{
		return $this->spamFilterActive;
	}
	/**
	 * Set spamMoveToInbox
	 * @param boolean spamMoveToInbox
	 * @return boolean
	 */
	public function setSpamMoveToInbox($_spamMoveToInbox)
	{
		return ($this->spamMoveToInbox = $_spamMoveToInbox);
	}
	/**
	 * Get spamMoveToInbox
	 * @return boolean
	 */
	public function getSpamMoveToInbox()
	{
		return $this->spamMoveToInbox;
	}
	/**
	 * Set spamCleanupPeriod
	 * @param int spamCleanupPeriod
	 * @return int
	 */
	public function setSpamCleanupPeriod($_spamCleanupPeriod)
	{
		return ($this->spamCleanupPeriod = $_spamCleanupPeriod);
	}
	/**
	 * Get spamCleanupPeriod
	 * @return int
	 */
	public function getSpamCleanupPeriod()
	{
		return $this->spamCleanupPeriod;
	}
	/**
	 * Set spamBlockSender
	 * @param boolean spamBlockSender
	 * @return boolean
	 */
	public function setSpamBlockSender($_spamBlockSender)
	{
		return ($this->spamBlockSender = $_spamBlockSender);
	}
	/**
	 * Get spamBlockSender
	 * @return boolean
	 */
	public function getSpamBlockSender()
	{
		return $this->spamBlockSender;
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