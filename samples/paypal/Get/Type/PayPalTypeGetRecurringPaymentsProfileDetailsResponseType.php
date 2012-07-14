<?php
/**
 * Class file for PayPalTypeGetRecurringPaymentsProfileDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetRecurringPaymentsProfileDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetRecurringPaymentsProfileDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The GetRecurringPaymentsProfileDetailsResponseDetails
	 * @var PayPalTypeGetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public $GetRecurringPaymentsProfileDetailsResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetRecurringPaymentsProfileDetailsResponseDetailsType GetRecurringPaymentsProfileDetailsResponseDetails
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsResponseType
	 */
	public function __construct($_GetRecurringPaymentsProfileDetailsResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetRecurringPaymentsProfileDetailsResponseDetails'=>$_GetRecurringPaymentsProfileDetailsResponseDetails));
	}
	/**
	 * Set GetRecurringPaymentsProfileDetailsResponseDetails
	 * @param GetRecurringPaymentsProfileDetailsResponseDetailsType GetRecurringPaymentsProfileDetailsResponseDetails
	 * @return GetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public function setGetRecurringPaymentsProfileDetailsResponseDetails($_GetRecurringPaymentsProfileDetailsResponseDetails)
	{
		return ($this->GetRecurringPaymentsProfileDetailsResponseDetails = $_GetRecurringPaymentsProfileDetailsResponseDetails);
	}
	/**
	 * Get GetRecurringPaymentsProfileDetailsResponseDetails
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsResponseDetailsType
	 */
	public function getGetRecurringPaymentsProfileDetailsResponseDetails()
	{
		return $this->GetRecurringPaymentsProfileDetailsResponseDetails;
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