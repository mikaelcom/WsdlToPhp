<?php
/**
 * Class file for PayPalTypeGetBillingAgreementCustomerDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBillingAgreementCustomerDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetBillingAgreementCustomerDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The GetBillingAgreementCustomerDetailsResponseDetails
	 * @var PayPalTypeGetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public $GetBillingAgreementCustomerDetailsResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetBillingAgreementCustomerDetailsResponseDetailsType GetBillingAgreementCustomerDetailsResponseDetails
	 * @return PayPalTypeGetBillingAgreementCustomerDetailsResponseType
	 */
	public function __construct($_GetBillingAgreementCustomerDetailsResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetBillingAgreementCustomerDetailsResponseDetails'=>$_GetBillingAgreementCustomerDetailsResponseDetails));
	}
	/**
	 * Set GetBillingAgreementCustomerDetailsResponseDetails
	 * @param GetBillingAgreementCustomerDetailsResponseDetailsType GetBillingAgreementCustomerDetailsResponseDetails
	 * @return GetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public function setGetBillingAgreementCustomerDetailsResponseDetails($_GetBillingAgreementCustomerDetailsResponseDetails)
	{
		return ($this->GetBillingAgreementCustomerDetailsResponseDetails = $_GetBillingAgreementCustomerDetailsResponseDetails);
	}
	/**
	 * Get GetBillingAgreementCustomerDetailsResponseDetails
	 * @return PayPalTypeGetBillingAgreementCustomerDetailsResponseDetailsType
	 */
	public function getGetBillingAgreementCustomerDetailsResponseDetails()
	{
		return $this->GetBillingAgreementCustomerDetailsResponseDetails;
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