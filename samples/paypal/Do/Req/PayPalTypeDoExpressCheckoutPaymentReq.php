<?php
/**
 * Class file for PayPalTypeDoExpressCheckoutPaymentReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoExpressCheckoutPaymentReq
 * @date 14/07/2012
 */
class PayPalTypeDoExpressCheckoutPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoExpressCheckoutPaymentRequest
	 * @var PayPalTypeDoExpressCheckoutPaymentRequestType
	 */
	public $DoExpressCheckoutPaymentRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoExpressCheckoutPaymentRequestType DoExpressCheckoutPaymentRequest
	 * @return PayPalTypeDoExpressCheckoutPaymentReq
	 */
	public function __construct($_DoExpressCheckoutPaymentRequest = null)
	{
		parent::__construct(array('DoExpressCheckoutPaymentRequest'=>$_DoExpressCheckoutPaymentRequest));
	}
	/**
	 * Set DoExpressCheckoutPaymentRequest
	 * @param DoExpressCheckoutPaymentRequestType DoExpressCheckoutPaymentRequest
	 * @return DoExpressCheckoutPaymentRequestType
	 */
	public function setDoExpressCheckoutPaymentRequest($_DoExpressCheckoutPaymentRequest)
	{
		return ($this->DoExpressCheckoutPaymentRequest = $_DoExpressCheckoutPaymentRequest);
	}
	/**
	 * Get DoExpressCheckoutPaymentRequest
	 * @return PayPalTypeDoExpressCheckoutPaymentRequestType
	 */
	public function getDoExpressCheckoutPaymentRequest()
	{
		return $this->DoExpressCheckoutPaymentRequest;
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