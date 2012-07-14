<?php
/**
 * Class file for PayPalTypeEnterBoardingRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeEnterBoardingRequestType
 * @date 14/07/2012
 */
class PayPalTypeEnterBoardingRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The EnterBoardingRequestDetails
	 * @var PayPalTypeEnterBoardingRequestDetailsType
	 */
	public $EnterBoardingRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeEnterBoardingRequestDetailsType EnterBoardingRequestDetails
	 * @return PayPalTypeEnterBoardingRequestType
	 */
	public function __construct($_EnterBoardingRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('EnterBoardingRequestDetails'=>$_EnterBoardingRequestDetails));
	}
	/**
	 * Set EnterBoardingRequestDetails
	 * @param EnterBoardingRequestDetailsType EnterBoardingRequestDetails
	 * @return EnterBoardingRequestDetailsType
	 */
	public function setEnterBoardingRequestDetails($_EnterBoardingRequestDetails)
	{
		return ($this->EnterBoardingRequestDetails = $_EnterBoardingRequestDetails);
	}
	/**
	 * Get EnterBoardingRequestDetails
	 * @return PayPalTypeEnterBoardingRequestDetailsType
	 */
	public function getEnterBoardingRequestDetails()
	{
		return $this->EnterBoardingRequestDetails;
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