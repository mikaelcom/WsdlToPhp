<?php
/**
 * Class file for PayPalTypeBMManageButtonStatusRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMManageButtonStatusRequestType
 * @date 14/07/2012
 */
class PayPalTypeBMManageButtonStatusRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Button ID of Hosted button. Required Character length and limitations: 10 single-byte numeric characters
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The ButtonStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Requested Status change for hosted button. Required Character length and limitations: 1 single-byte alphanumeric characters
	 * @var PayPalTypeButtonStatusType
	 */
	public $ButtonStatus;
	/**
	 * Constructor
	 * @param string HostedButtonID
	 * @param PayPalTypeButtonStatusType ButtonStatus
	 * @return PayPalTypeBMManageButtonStatusRequestType
	 */
	public function __construct($_HostedButtonID = null,$_ButtonStatus = null)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_HostedButtonID,'ButtonStatus'=>$_ButtonStatus));
	}
	/**
	 * Set HostedButtonID
	 * @param string HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_HostedButtonID)
	{
		return ($this->HostedButtonID = $_HostedButtonID);
	}
	/**
	 * Get HostedButtonID
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set ButtonStatus
	 * @param ButtonStatusType ButtonStatus
	 * @return ButtonStatusType
	 */
	public function setButtonStatus($_ButtonStatus)
	{
		return ($this->ButtonStatus = PayPalTypeButtonStatusType::valueIsValid($_ButtonStatus)?$_ButtonStatus:null);
	}
	/**
	 * Get ButtonStatus
	 * @return PayPalTypeButtonStatusType
	 */
	public function getButtonStatus()
	{
		return $this->ButtonStatus;
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