<?php
/**
 * Class file for PayPalTypeGetExpressCheckoutDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetExpressCheckoutDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetExpressCheckoutDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The GetExpressCheckoutDetailsResponseDetails
	 * @var PayPalTypeGetExpressCheckoutDetailsResponseDetailsType
	 */
	public $GetExpressCheckoutDetailsResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetExpressCheckoutDetailsResponseDetailsType GetExpressCheckoutDetailsResponseDetails
	 * @return PayPalTypeGetExpressCheckoutDetailsResponseType
	 */
	public function __construct($_GetExpressCheckoutDetailsResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetExpressCheckoutDetailsResponseDetails'=>$_GetExpressCheckoutDetailsResponseDetails));
	}
	/**
	 * Set GetExpressCheckoutDetailsResponseDetails
	 * @param GetExpressCheckoutDetailsResponseDetailsType GetExpressCheckoutDetailsResponseDetails
	 * @return GetExpressCheckoutDetailsResponseDetailsType
	 */
	public function setGetExpressCheckoutDetailsResponseDetails($_GetExpressCheckoutDetailsResponseDetails)
	{
		return ($this->GetExpressCheckoutDetailsResponseDetails = $_GetExpressCheckoutDetailsResponseDetails);
	}
	/**
	 * Get GetExpressCheckoutDetailsResponseDetails
	 * @return PayPalTypeGetExpressCheckoutDetailsResponseDetailsType
	 */
	public function getGetExpressCheckoutDetailsResponseDetails()
	{
		return $this->GetExpressCheckoutDetailsResponseDetails;
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