<?php
/**
 * Class file for OvhTypeTelephonyBillingAccountStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillingAccountStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillingAccountStruct extends OvhWsdlClass
{
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The mobile
	 * @var string
	 */
	public $mobile;
	/**
	 * The mobileDestination
	 * @var string
	 */
	public $mobileDestination;
	/**
	 * The expirationDate
	 * @var string
	 */
	public $expirationDate;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The trusted
	 * @var boolean
	 */
	public $trusted;
	/**
	 * The pendingAction
	 * @var OvhTypeTelephonyPendingActionStruct
	 */
	public $pendingAction;
	/**
	 * The descriptionUser
	 * @var string
	 */
	public $descriptionUser;
	/**
	 * Constructor
	 * @param string description
	 * @param string mobile
	 * @param string mobileDestination
	 * @param string expirationDate
	 * @param string version
	 * @param boolean trusted
	 * @param OvhTypeTelephonyPendingActionStruct pendingAction
	 * @param string descriptionUser
	 * @return OvhTypeTelephonyBillingAccountStruct
	 */
	public function __construct($_description = null,$_mobile = null,$_mobileDestination = null,$_expirationDate = null,$_version = null,$_trusted = null,$_pendingAction = null,$_descriptionUser = null)
	{
		parent::__construct(array('description'=>$_description,'mobile'=>$_mobile,'mobileDestination'=>$_mobileDestination,'expirationDate'=>$_expirationDate,'version'=>$_version,'trusted'=>$_trusted,'pendingAction'=>$_pendingAction,'descriptionUser'=>$_descriptionUser));
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set mobile
	 * @param string mobile
	 * @return string
	 */
	public function setMobile($_mobile)
	{
		return ($this->mobile = $_mobile);
	}
	/**
	 * Get mobile
	 * @return string
	 */
	public function getMobile()
	{
		return $this->mobile;
	}
	/**
	 * Set mobileDestination
	 * @param string mobileDestination
	 * @return string
	 */
	public function setMobileDestination($_mobileDestination)
	{
		return ($this->mobileDestination = $_mobileDestination);
	}
	/**
	 * Get mobileDestination
	 * @return string
	 */
	public function getMobileDestination()
	{
		return $this->mobileDestination;
	}
	/**
	 * Set expirationDate
	 * @param string expirationDate
	 * @return string
	 */
	public function setExpirationDate($_expirationDate)
	{
		return ($this->expirationDate = $_expirationDate);
	}
	/**
	 * Get expirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	/**
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set trusted
	 * @param boolean trusted
	 * @return boolean
	 */
	public function setTrusted($_trusted)
	{
		return ($this->trusted = $_trusted);
	}
	/**
	 * Get trusted
	 * @return boolean
	 */
	public function getTrusted()
	{
		return $this->trusted;
	}
	/**
	 * Set pendingAction
	 * @param telephonyPendingActionStruct pendingAction
	 * @return telephonyPendingActionStruct
	 */
	public function setPendingAction($_pendingAction)
	{
		return ($this->pendingAction = $_pendingAction);
	}
	/**
	 * Get pendingAction
	 * @return OvhTypetelephonyPendingActionStruct
	 */
	public function getPendingAction()
	{
		return $this->pendingAction;
	}
	/**
	 * Set descriptionUser
	 * @param string descriptionUser
	 * @return string
	 */
	public function setDescriptionUser($_descriptionUser)
	{
		return ($this->descriptionUser = $_descriptionUser);
	}
	/**
	 * Get descriptionUser
	 * @return string
	 */
	public function getDescriptionUser()
	{
		return $this->descriptionUser;
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