<?php
/**
 * Class file for PayPalTypeDoMobileCheckoutPaymentReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoMobileCheckoutPaymentReq
 * @date 14/07/2012
 */
class PayPalTypeDoMobileCheckoutPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoMobileCheckoutPaymentRequest
	 * @var PayPalTypeDoMobileCheckoutPaymentRequestType
	 */
	public $DoMobileCheckoutPaymentRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoMobileCheckoutPaymentRequestType DoMobileCheckoutPaymentRequest
	 * @return PayPalTypeDoMobileCheckoutPaymentReq
	 */
	public function __construct($_DoMobileCheckoutPaymentRequest = null)
	{
		parent::__construct(array('DoMobileCheckoutPaymentRequest'=>$_DoMobileCheckoutPaymentRequest));
	}
	/**
	 * Set DoMobileCheckoutPaymentRequest
	 * @param DoMobileCheckoutPaymentRequestType DoMobileCheckoutPaymentRequest
	 * @return DoMobileCheckoutPaymentRequestType
	 */
	public function setDoMobileCheckoutPaymentRequest($_DoMobileCheckoutPaymentRequest)
	{
		return ($this->DoMobileCheckoutPaymentRequest = $_DoMobileCheckoutPaymentRequest);
	}
	/**
	 * Get DoMobileCheckoutPaymentRequest
	 * @return PayPalTypeDoMobileCheckoutPaymentRequestType
	 */
	public function getDoMobileCheckoutPaymentRequest()
	{
		return $this->DoMobileCheckoutPaymentRequest;
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