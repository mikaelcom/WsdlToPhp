<?php
/**
 * Class file for PayPalTypeGetBoardingDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBoardingDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetBoardingDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The GetBoardingDetailsResponseDetails
	 * @var PayPalTypeGetBoardingDetailsResponseDetailsType
	 */
	public $GetBoardingDetailsResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetBoardingDetailsResponseDetailsType GetBoardingDetailsResponseDetails
	 * @return PayPalTypeGetBoardingDetailsResponseType
	 */
	public function __construct($_GetBoardingDetailsResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetBoardingDetailsResponseDetails'=>$_GetBoardingDetailsResponseDetails));
	}
	/**
	 * Set GetBoardingDetailsResponseDetails
	 * @param GetBoardingDetailsResponseDetailsType GetBoardingDetailsResponseDetails
	 * @return GetBoardingDetailsResponseDetailsType
	 */
	public function setGetBoardingDetailsResponseDetails($_GetBoardingDetailsResponseDetails)
	{
		return ($this->GetBoardingDetailsResponseDetails = $_GetBoardingDetailsResponseDetails);
	}
	/**
	 * Get GetBoardingDetailsResponseDetails
	 * @return PayPalTypeGetBoardingDetailsResponseDetailsType
	 */
	public function getGetBoardingDetailsResponseDetails()
	{
		return $this->GetBoardingDetailsResponseDetails;
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