<?php
/**
 * Class file for PayPalTypeEnterBoardingReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeEnterBoardingReq
 * @date 14/07/2012
 */
class PayPalTypeEnterBoardingReq extends PayPalWsdlClass
{
	/**
	 * The EnterBoardingRequest
	 * @var PayPalTypeEnterBoardingRequestType
	 */
	public $EnterBoardingRequest;
	/**
	 * Constructor
	 * @param PayPalTypeEnterBoardingRequestType EnterBoardingRequest
	 * @return PayPalTypeEnterBoardingReq
	 */
	public function __construct($_EnterBoardingRequest = null)
	{
		parent::__construct(array('EnterBoardingRequest'=>$_EnterBoardingRequest));
	}
	/**
	 * Set EnterBoardingRequest
	 * @param EnterBoardingRequestType EnterBoardingRequest
	 * @return EnterBoardingRequestType
	 */
	public function setEnterBoardingRequest($_EnterBoardingRequest)
	{
		return ($this->EnterBoardingRequest = $_EnterBoardingRequest);
	}
	/**
	 * Get EnterBoardingRequest
	 * @return PayPalTypeEnterBoardingRequestType
	 */
	public function getEnterBoardingRequest()
	{
		return $this->EnterBoardingRequest;
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