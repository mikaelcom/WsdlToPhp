<?php
/**
 * Class file for PayPalTypeSetExpressCheckoutReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetExpressCheckoutReq
 * @date 14/07/2012
 */
class PayPalTypeSetExpressCheckoutReq extends PayPalWsdlClass
{
	/**
	 * The SetExpressCheckoutRequest
	 * @var PayPalTypeSetExpressCheckoutRequestType
	 */
	public $SetExpressCheckoutRequest;
	/**
	 * Constructor
	 * @param PayPalTypeSetExpressCheckoutRequestType SetExpressCheckoutRequest
	 * @return PayPalTypeSetExpressCheckoutReq
	 */
	public function __construct($_SetExpressCheckoutRequest = null)
	{
		parent::__construct(array('SetExpressCheckoutRequest'=>$_SetExpressCheckoutRequest));
	}
	/**
	 * Set SetExpressCheckoutRequest
	 * @param SetExpressCheckoutRequestType SetExpressCheckoutRequest
	 * @return SetExpressCheckoutRequestType
	 */
	public function setSetExpressCheckoutRequest($_SetExpressCheckoutRequest)
	{
		return ($this->SetExpressCheckoutRequest = $_SetExpressCheckoutRequest);
	}
	/**
	 * Get SetExpressCheckoutRequest
	 * @return PayPalTypeSetExpressCheckoutRequestType
	 */
	public function getSetExpressCheckoutRequest()
	{
		return $this->SetExpressCheckoutRequest;
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