<?php
/**
 * Class file for PayPalTypeBMGetInventoryRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMGetInventoryRequestType
 * @date 14/07/2012
 */
class PayPalTypeBMGetInventoryRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Hosted Button ID of the button to return inventory for. Required Character length and limitations: 10 single-byte numeric characters
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * Constructor
	 * @param string HostedButtonID
	 * @return PayPalTypeBMGetInventoryRequestType
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