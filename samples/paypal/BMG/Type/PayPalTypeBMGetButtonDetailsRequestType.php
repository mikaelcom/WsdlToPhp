<?php
/**
 * Class file for PayPalTypeBMGetButtonDetailsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMGetButtonDetailsRequestType
 * @date 14/07/2012
 */
class PayPalTypeBMGetButtonDetailsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Button ID of button to return. Required Character length and limitations: 10 single-byte numeric characters
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * Constructor
	 * @param string HostedButtonID
	 * @return PayPalTypeBMGetButtonDetailsRequestType
	 */
	public function __construct($_HostedButtonID)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_HostedButtonID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>