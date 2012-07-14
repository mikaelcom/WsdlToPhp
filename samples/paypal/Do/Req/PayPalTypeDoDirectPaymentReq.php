<?php
/**
 * Class file for PayPalTypeDoDirectPaymentReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoDirectPaymentReq
 * @date 14/07/2012
 */
class PayPalTypeDoDirectPaymentReq extends PayPalWsdlClass
{
	/**
	 * The DoDirectPaymentRequest
	 * @var PayPalTypeDoDirectPaymentRequestType
	 */
	public $DoDirectPaymentRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoDirectPaymentRequestType DoDirectPaymentRequest
	 * @return PayPalTypeDoDirectPaymentReq
	 */
	public function __construct($_DoDirectPaymentRequest = null)
	{
		parent::__construct(array('DoDirectPaymentRequest'=>$_DoDirectPaymentRequest));
	}
	/**
	 * Set DoDirectPaymentRequest
	 * @param DoDirectPaymentRequestType DoDirectPaymentRequest
	 * @return DoDirectPaymentRequestType
	 */
	public function setDoDirectPaymentRequest($_DoDirectPaymentRequest)
	{
		return ($this->DoDirectPaymentRequest = $_DoDirectPaymentRequest);
	}
	/**
	 * Get DoDirectPaymentRequest
	 * @return PayPalTypeDoDirectPaymentRequestType
	 */
	public function getDoDirectPaymentRequest()
	{
		return $this->DoDirectPaymentRequest;
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