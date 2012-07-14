<?php
/**
 * Class file for PayPalTypeExternalRememberMeOptInDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExternalRememberMeOptInDetailsType
 * Documentation : This element contains information that allows the merchant to request to opt into external remember me on behalf of the buyer or to request login bypass using external remember me.
 * @date 14/07/2012
 */
class PayPalTypeExternalRememberMeOptInDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeOptIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 1 = opt in to external remember me. 0 or omitted = no opt-in Other values are invalid
	 * @var string
	 */
	public $ExternalRememberMeOptIn;
	/**
	 * The ExternalRememberMeOwnerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : E-mail address or secure merchant account ID of merchant to associate with new external remember-me. Currently, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant account.
	 * @var PayPalTypeExternalRememberMeOwnerDetailsType
	 */
	public $ExternalRememberMeOwnerDetails;
	/**
	 * Constructor
	 * @param string ExternalRememberMeOptIn
	 * @param PayPalTypeExternalRememberMeOwnerDetailsType ExternalRememberMeOwnerDetails
	 * @return PayPalTypeExternalRememberMeOptInDetailsType
	 */
	public function __construct($_ExternalRememberMeOptIn = null,$_ExternalRememberMeOwnerDetails = null)
	{
		parent::__construct(array('ExternalRememberMeOptIn'=>$_ExternalRememberMeOptIn,'ExternalRememberMeOwnerDetails'=>$_ExternalRememberMeOwnerDetails));
	}
	/**
	 * Set ExternalRememberMeOptIn
	 * @param string ExternalRememberMeOptIn
	 * @return string
	 */
	public function setExternalRememberMeOptIn($_ExternalRememberMeOptIn)
	{
		return ($this->ExternalRememberMeOptIn = $_ExternalRememberMeOptIn);
	}
	/**
	 * Get ExternalRememberMeOptIn
	 * @return string
	 */
	public function getExternalRememberMeOptIn()
	{
		return $this->ExternalRememberMeOptIn;
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