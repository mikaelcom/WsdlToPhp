<?php
/**
 * Class file for PayPalTypeSetMobileCheckoutReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetMobileCheckoutReq
 * @date 14/07/2012
 */
class PayPalTypeSetMobileCheckoutReq extends PayPalWsdlClass
{
	/**
	 * The SetMobileCheckoutRequest
	 * @var PayPalTypeSetMobileCheckoutRequestType
	 */
	public $SetMobileCheckoutRequest;
	/**
	 * Constructor
	 * @param PayPalTypeSetMobileCheckoutRequestType SetMobileCheckoutRequest
	 * @return PayPalTypeSetMobileCheckoutReq
	 */
	public function __construct($_SetMobileCheckoutRequest = null)
	{
		parent::__construct(array('SetMobileCheckoutRequest'=>$_SetMobileCheckoutRequest));
	}
	/**
	 * Set SetMobileCheckoutRequest
	 * @param SetMobileCheckoutRequestType SetMobileCheckoutRequest
	 * @return SetMobileCheckoutRequestType
	 */
	public function setSetMobileCheckoutRequest($_SetMobileCheckoutRequest)
	{
		return ($this->SetMobileCheckoutRequest = $_SetMobileCheckoutRequest);
	}
	/**
	 * Get SetMobileCheckoutRequest
	 * @return PayPalTypeSetMobileCheckoutRequestType
	 */
	public function getSetMobileCheckoutRequest()
	{
		return $this->SetMobileCheckoutRequest;
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