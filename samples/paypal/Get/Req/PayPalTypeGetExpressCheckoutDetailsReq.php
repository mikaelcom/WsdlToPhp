<?php
/**
 * Class file for PayPalTypeGetExpressCheckoutDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetExpressCheckoutDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetExpressCheckoutDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetExpressCheckoutDetailsRequest
	 * @var PayPalTypeGetExpressCheckoutDetailsRequestType
	 */
	public $GetExpressCheckoutDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetExpressCheckoutDetailsRequestType GetExpressCheckoutDetailsRequest
	 * @return PayPalTypeGetExpressCheckoutDetailsReq
	 */
	public function __construct($_GetExpressCheckoutDetailsRequest = null)
	{
		parent::__construct(array('GetExpressCheckoutDetailsRequest'=>$_GetExpressCheckoutDetailsRequest));
	}
	/**
	 * Set GetExpressCheckoutDetailsRequest
	 * @param GetExpressCheckoutDetailsRequestType GetExpressCheckoutDetailsRequest
	 * @return GetExpressCheckoutDetailsRequestType
	 */
	public function setGetExpressCheckoutDetailsRequest($_GetExpressCheckoutDetailsRequest)
	{
		return ($this->GetExpressCheckoutDetailsRequest = $_GetExpressCheckoutDetailsRequest);
	}
	/**
	 * Get GetExpressCheckoutDetailsRequest
	 * @return PayPalTypeGetExpressCheckoutDetailsRequestType
	 */
	public function getGetExpressCheckoutDetailsRequest()
	{
		return $this->GetExpressCheckoutDetailsRequest;
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