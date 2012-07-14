<?php
/**
 * Class file for PayPalTypeGetAuthDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetAuthDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetAuthDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The GetAuthDetailsResponseDetails
	 * @var PayPalTypeGetAuthDetailsResponseDetailsType
	 */
	public $GetAuthDetailsResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetAuthDetailsResponseDetailsType GetAuthDetailsResponseDetails
	 * @return PayPalTypeGetAuthDetailsResponseType
	 */
	public function __construct($_GetAuthDetailsResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetAuthDetailsResponseDetails'=>$_GetAuthDetailsResponseDetails));
	}
	/**
	 * Set GetAuthDetailsResponseDetails
	 * @param GetAuthDetailsResponseDetailsType GetAuthDetailsResponseDetails
	 * @return GetAuthDetailsResponseDetailsType
	 */
	public function setGetAuthDetailsResponseDetails($_GetAuthDetailsResponseDetails)
	{
		return ($this->GetAuthDetailsResponseDetails = $_GetAuthDetailsResponseDetails);
	}
	/**
	 * Get GetAuthDetailsResponseDetails
	 * @return PayPalTypeGetAuthDetailsResponseDetailsType
	 */
	public function getGetAuthDetailsResponseDetails()
	{
		return $this->GetAuthDetailsResponseDetails;
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