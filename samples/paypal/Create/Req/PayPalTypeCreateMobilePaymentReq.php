<?php
/**
 * Class file for PayPalTypeCreateMobilePaymentReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateMobilePaymentReq
 * @date 14/07/2012
 */
class PayPalTypeCreateMobilePaymentReq extends PayPalWsdlClass
{
	/**
	 * The CreateMobilePaymentRequest
	 * @var PayPalTypeCreateMobilePaymentRequestType
	 */
	public $CreateMobilePaymentRequest;
	/**
	 * Constructor
	 * @param PayPalTypeCreateMobilePaymentRequestType CreateMobilePaymentRequest
	 * @return PayPalTypeCreateMobilePaymentReq
	 */
	public function __construct($_CreateMobilePaymentRequest = null)
	{
		parent::__construct(array('CreateMobilePaymentRequest'=>$_CreateMobilePaymentRequest));
	}
	/**
	 * Set CreateMobilePaymentRequest
	 * @param CreateMobilePaymentRequestType CreateMobilePaymentRequest
	 * @return CreateMobilePaymentRequestType
	 */
	public function setCreateMobilePaymentRequest($_CreateMobilePaymentRequest)
	{
		return ($this->CreateMobilePaymentRequest = $_CreateMobilePaymentRequest);
	}
	/**
	 * Get CreateMobilePaymentRequest
	 * @return PayPalTypeCreateMobilePaymentRequestType
	 */
	public function getCreateMobilePaymentRequest()
	{
		return $this->CreateMobilePaymentRequest;
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