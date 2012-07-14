<?php
/**
 * Class file for PayPalTypeRememberMeIDInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRememberMeIDInfoType
 * @date 14/07/2012
 */
class PayPalTypeRememberMeIDInfoType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : External remember-me ID returned by GetExpressCheckoutDetails on successful opt-in. The ExternalRememberMeID is a 17-character alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has meaning only to the merchant. If present, requests that the web flow attempt bypass of login.
	 * @var string
	 */
	public $ExternalRememberMeID;
	/**
	 * Constructor
	 * @param string ExternalRememberMeID
	 * @return PayPalTypeRememberMeIDInfoType
	 */
	public function __construct($_ExternalRememberMeID = null)
	{
		parent::__construct(array('ExternalRememberMeID'=>$_ExternalRememberMeID));
	}
	/**
	 * Set ExternalRememberMeID
	 * @param string ExternalRememberMeID
	 * @return string
	 */
	public function setExternalRememberMeID($_ExternalRememberMeID)
	{
		return ($this->ExternalRememberMeID = $_ExternalRememberMeID);
	}
	/**
	 * Get ExternalRememberMeID
	 * @return string
	 */
	public function getExternalRememberMeID()
	{
		return $this->ExternalRememberMeID;
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