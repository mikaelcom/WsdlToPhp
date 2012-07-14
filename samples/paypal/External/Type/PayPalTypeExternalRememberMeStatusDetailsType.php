<?php
/**
 * Class file for PayPalTypeExternalRememberMeStatusDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExternalRememberMeStatusDetailsType
 * Documentation : Response information resulting from opt-in operation or current login bypass status.
 * @date 14/07/2012
 */
class PayPalTypeExternalRememberMeStatusDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Required field that reports status of opt-in or login bypass attempt. 0 = Success - successful opt-in or ExternalRememberMeID specified in SetExpressCheckout is valid. 1 = Invalid ID - ExternalRememberMeID specified in SetExpressCheckout is invalid. 2 = Internal Error - System error or outage during opt-in or login bypass. Can retry opt-in or login bypass next time. Flow will force full authentication and allow buyer to complete transaction. -1 = None - the return value does not signify any valid remember me status.
	 * @var integer
	 */
	public $ExternalRememberMeStatus;
	/**
	 * The ExternalRememberMeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Identifier returned on external-remember-me-opt-in to allow the merchant to request bypass of PayPal login through external remember me on behalf of the buyer in future transactions. The ExternalRememberMeID is a 17-character alphanumeric (encrypted) string. This field has meaning only to the merchant.
	 * @var string
	 */
	public $ExternalRememberMeID;
	/**
	 * Constructor
	 * @param integer ExternalRememberMeStatus
	 * @param string ExternalRememberMeID
	 * @return PayPalTypeExternalRememberMeStatusDetailsType
	 */
	public function __construct($_ExternalRememberMeStatus,$_ExternalRememberMeID = null)
	{
		parent::__construct(array('ExternalRememberMeStatus'=>$_ExternalRememberMeStatus,'ExternalRememberMeID'=>$_ExternalRememberMeID));
	}
	/**
	 * Set ExternalRememberMeStatus
	 * @param integer ExternalRememberMeStatus
	 * @return integer
	 */
	public function setExternalRememberMeStatus($_ExternalRememberMeStatus)
	{
		return ($this->ExternalRememberMeStatus = $_ExternalRememberMeStatus);
	}
	/**
	 * Get ExternalRememberMeStatus
	 * @return integer
	 */
	public function getExternalRememberMeStatus()
	{
		return $this->ExternalRememberMeStatus;
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