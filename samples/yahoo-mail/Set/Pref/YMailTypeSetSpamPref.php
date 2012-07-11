<?php
/**
 * Class file for YMailTypeSetSpamPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetSpamPref
 * @date 02/07/2012
 */
class YMailTypeSetSpamPref extends YMailWsdlClass
{
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
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
	 * @param boolean spamMoveToInbox
	 * @param int spamCleanupPeriod
	 * @param boolean spamBlockSender
	 * @return YMailTypeSetSpamPref
	 */
	public function __construct($_spamMoveToInbox = null,$_spamCleanupPeriod = null,$_spamBlockSender = null)
	{
		parent::__construct(array('spamMoveToInbox'=>$_spamMoveToInbox,'spamCleanupPeriod'=>$_spamCleanupPeriod,'spamBlockSender'=>$_spamBlockSender));
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