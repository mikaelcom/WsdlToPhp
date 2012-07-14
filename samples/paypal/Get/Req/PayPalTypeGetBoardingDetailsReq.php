<?php
/**
 * Class file for PayPalTypeGetBoardingDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBoardingDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetBoardingDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetBoardingDetailsRequest
	 * @var PayPalTypeGetBoardingDetailsRequestType
	 */
	public $GetBoardingDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetBoardingDetailsRequestType GetBoardingDetailsRequest
	 * @return PayPalTypeGetBoardingDetailsReq
	 */
	public function __construct($_GetBoardingDetailsRequest = null)
	{
		parent::__construct(array('GetBoardingDetailsRequest'=>$_GetBoardingDetailsRequest));
	}
	/**
	 * Set GetBoardingDetailsRequest
	 * @param GetBoardingDetailsRequestType GetBoardingDetailsRequest
	 * @return GetBoardingDetailsRequestType
	 */
	public function setGetBoardingDetailsRequest($_GetBoardingDetailsRequest)
	{
		return ($this->GetBoardingDetailsRequest = $_GetBoardingDetailsRequest);
	}
	/**
	 * Get GetBoardingDetailsRequest
	 * @return PayPalTypeGetBoardingDetailsRequestType
	 */
	public function getGetBoardingDetailsRequest()
	{
		return $this->GetBoardingDetailsRequest;
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