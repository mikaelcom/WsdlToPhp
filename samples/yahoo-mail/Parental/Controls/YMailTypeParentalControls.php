<?php
/**
 * Class file for YMailTypeParentalControls
 * @date 02/07/2012
 */
/**
 * Class YMailTypeParentalControls
 * @date 02/07/2012
 */
class YMailTypeParentalControls extends YMailWsdlClass
{
	/**
	 * The isActive
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $isActive;
	/**
	 * The mailAccessAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $mailAccessAllowed;
	/**
	 * The restrictInbound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $restrictInbound;
	/**
	 * The restrictOutbound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $restrictOutbound;
	/**
	 * The attachmentsAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $attachmentsAllowed;
	/**
	 * The historyEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $historyEnabled;
	/**
	 * The master
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $master;
	/**
	 * The messengerAccessAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $messengerAccessAllowed;
	/**
	 * Constructor
	 * @param boolean isActive
	 * @param boolean mailAccessAllowed
	 * @param boolean restrictInbound
	 * @param boolean restrictOutbound
	 * @param boolean attachmentsAllowed
	 * @param boolean historyEnabled
	 * @param string master
	 * @param boolean messengerAccessAllowed
	 * @return YMailTypeParentalControls
	 */
	public function __construct($_isActive = null,$_mailAccessAllowed = null,$_restrictInbound = null,$_restrictOutbound = null,$_attachmentsAllowed = null,$_historyEnabled = null,$_master = null,$_messengerAccessAllowed = null)
	{
		parent::__construct(array('isActive'=>$_isActive,'mailAccessAllowed'=>$_mailAccessAllowed,'restrictInbound'=>$_restrictInbound,'restrictOutbound'=>$_restrictOutbound,'attachmentsAllowed'=>$_attachmentsAllowed,'historyEnabled'=>$_historyEnabled,'master'=>$_master,'messengerAccessAllowed'=>$_messengerAccessAllowed));
	}
	/**
	 * Set isActive
	 * @param boolean isActive
	 * @return boolean
	 */
	public function setIsActive($_isActive)
	{
		return ($this->isActive = $_isActive);
	}
	/**
	 * Get isActive
	 * @return boolean
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}
	/**
	 * Set mailAccessAllowed
	 * @param boolean mailAccessAllowed
	 * @return boolean
	 */
	public function setMailAccessAllowed($_mailAccessAllowed)
	{
		return ($this->mailAccessAllowed = $_mailAccessAllowed);
	}
	/**
	 * Get mailAccessAllowed
	 * @return boolean
	 */
	public function getMailAccessAllowed()
	{
		return $this->mailAccessAllowed;
	}
	/**
	 * Set restrictInbound
	 * @param boolean restrictInbound
	 * @return boolean
	 */
	public function setRestrictInbound($_restrictInbound)
	{
		return ($this->restrictInbound = $_restrictInbound);
	}
	/**
	 * Get restrictInbound
	 * @return boolean
	 */
	public function getRestrictInbound()
	{
		return $this->restrictInbound;
	}
	/**
	 * Set restrictOutbound
	 * @param boolean restrictOutbound
	 * @return boolean
	 */
	public function setRestrictOutbound($_restrictOutbound)
	{
		return ($this->restrictOutbound = $_restrictOutbound);
	}
	/**
	 * Get restrictOutbound
	 * @return boolean
	 */
	public function getRestrictOutbound()
	{
		return $this->restrictOutbound;
	}
	/**
	 * Set attachmentsAllowed
	 * @param boolean attachmentsAllowed
	 * @return boolean
	 */
	public function setAttachmentsAllowed($_attachmentsAllowed)
	{
		return ($this->attachmentsAllowed = $_attachmentsAllowed);
	}
	/**
	 * Get attachmentsAllowed
	 * @return boolean
	 */
	public function getAttachmentsAllowed()
	{
		return $this->attachmentsAllowed;
	}
	/**
	 * Set historyEnabled
	 * @param boolean historyEnabled
	 * @return boolean
	 */
	public function setHistoryEnabled($_historyEnabled)
	{
		return ($this->historyEnabled = $_historyEnabled);
	}
	/**
	 * Get historyEnabled
	 * @return boolean
	 */
	public function getHistoryEnabled()
	{
		return $this->historyEnabled;
	}
	/**
	 * Set master
	 * @param string master
	 * @return string
	 */
	public function setMaster($_master)
	{
		return ($this->master = $_master);
	}
	/**
	 * Get master
	 * @return string
	 */
	public function getMaster()
	{
		return $this->master;
	}
	/**
	 * Set messengerAccessAllowed
	 * @param boolean messengerAccessAllowed
	 * @return boolean
	 */
	public function setMessengerAccessAllowed($_messengerAccessAllowed)
	{
		return ($this->messengerAccessAllowed = $_messengerAccessAllowed);
	}
	/**
	 * Get messengerAccessAllowed
	 * @return boolean
	 */
	public function getMessengerAccessAllowed()
	{
		return $this->messengerAccessAllowed;
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