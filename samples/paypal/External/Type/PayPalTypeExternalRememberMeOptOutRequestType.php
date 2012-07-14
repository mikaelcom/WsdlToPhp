<?php
/**
 * Class file for PayPalTypeExternalRememberMeOptOutRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExternalRememberMeOptOutRequestType
 * @date 14/07/2012
 */
class PayPalTypeExternalRememberMeOptOutRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The ExternalRememberMeID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The merchant passes in the ExternalRememberMeID to identify the user to opt out. This is a 17-character alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has meaning only to the merchant. Required
	 * @var string
	 */
	public $ExternalRememberMeID;
	/**
	 * The ExternalRememberMeOwnerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : E-mail address or secure merchant account ID of merchant to associate with external remember-me.
	 * @var PayPalTypeExternalRememberMeOwnerDetailsType
	 */
	public $ExternalRememberMeOwnerDetails;
	/**
	 * Constructor
	 * @param string ExternalRememberMeID
	 * @param PayPalTypeExternalRememberMeOwnerDetailsType ExternalRememberMeOwnerDetails
	 * @return PayPalTypeExternalRememberMeOptOutRequestType
	 */
	public function __construct($_ExternalRememberMeID,$_ExternalRememberMeOwnerDetails = null)
	{
		PayPalWsdlClass::__construct(array('ExternalRememberMeID'=>$_ExternalRememberMeID,'ExternalRememberMeOwnerDetails'=>$_ExternalRememberMeOwnerDetails));
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
	 * Set ExternalRememberMeOwnerDetails
	 * @param ExternalRememberMeOwnerDetailsType ExternalRememberMeOwnerDetails
	 * @return ExternalRememberMeOwnerDetailsType
	 */
	public function setExternalRememberMeOwnerDetails($_ExternalRememberMeOwnerDetails)
	{
		return ($this->ExternalRememberMeOwnerDetails = $_ExternalRememberMeOwnerDetails);
	}
	/**
	 * Get ExternalRememberMeOwnerDetails
	 * @return PayPalTypeExternalRememberMeOwnerDetailsType
	 */
	public function getExternalRememberMeOwnerDetails()
	{
		return $this->ExternalRememberMeOwnerDetails;
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