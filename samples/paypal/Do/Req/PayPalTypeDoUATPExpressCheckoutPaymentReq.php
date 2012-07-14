<?php
/**
 * Class file for PayPalTypeDoUATPExpressCheckoutPaymentReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoUATPExpressCheckoutPaymentReq
 * @date 14/07/2012
 */
class PayPalTypeDoUATPExpressCheckoutPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoUATPExpressCheckoutPaymentRequest
	 * @var PayPalTypeDoUATPExpressCheckoutPaymentRequestType
	 */
	public $DoUATPExpressCheckoutPaymentRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoUATPExpressCheckoutPaymentRequestType DoUATPExpressCheckoutPaymentRequest
	 * @return PayPalTypeDoUATPExpressCheckoutPaymentReq
	 */
	public function __construct($_DoUATPExpressCheckoutPaymentRequest = null)
	{
		parent::__construct(array('DoUATPExpressCheckoutPaymentRequest'=>$_DoUATPExpressCheckoutPaymentRequest));
	}
	/**
	 * Set DoUATPExpressCheckoutPaymentRequest
	 * @param DoUATPExpressCheckoutPaymentRequestType DoUATPExpressCheckoutPaymentRequest
	 * @return DoUATPExpressCheckoutPaymentRequestType
	 */
	public function setDoUATPExpressCheckoutPaymentRequest($_DoUATPExpressCheckoutPaymentRequest)
	{
		return ($this->DoUATPExpressCheckoutPaymentRequest = $_DoUATPExpressCheckoutPaymentRequest);
	}
	/**
	 * Get DoUATPExpressCheckoutPaymentRequest
	 * @return PayPalTypeDoUATPExpressCheckoutPaymentRequestType
	 */
	public function getDoUATPExpressCheckoutPaymentRequest()
	{
		return $this->DoUATPExpressCheckoutPaymentRequest;
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