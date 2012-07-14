<?php
/**
 * Class file for PayPalTypeGetAccessPermissionDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetAccessPermissionDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetAccessPermissionDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The GetAccessPermissionDetailsResponseDetails
	 * @var PayPalTypeGetAccessPermissionDetailsResponseDetailsType
	 */
	public $GetAccessPermissionDetailsResponseDetails;
	/**
	 * Constructor
	 * @param PayPalTypeGetAccessPermissionDetailsResponseDetailsType GetAccessPermissionDetailsResponseDetails
	 * @return PayPalTypeGetAccessPermissionDetailsResponseType
	 */
	public function __construct($_GetAccessPermissionDetailsResponseDetails = null)
	{
		PayPalWsdlClass::__construct(array('GetAccessPermissionDetailsResponseDetails'=>$_GetAccessPermissionDetailsResponseDetails));
	}
	/**
	 * Set GetAccessPermissionDetailsResponseDetails
	 * @param GetAccessPermissionDetailsResponseDetailsType GetAccessPermissionDetailsResponseDetails
	 * @return GetAccessPermissionDetailsResponseDetailsType
	 */
	public function setGetAccessPermissionDetailsResponseDetails($_GetAccessPermissionDetailsResponseDetails)
	{
		return ($this->GetAccessPermissionDetailsResponseDetails = $_GetAccessPermissionDetailsResponseDetails);
	}
	/**
	 * Get GetAccessPermissionDetailsResponseDetails
	 * @return PayPalTypeGetAccessPermissionDetailsResponseDetailsType
	 */
	public function getGetAccessPermissionDetailsResponseDetails()
	{
		return $this->GetAccessPermissionDetailsResponseDetails;
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