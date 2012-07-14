<?php
/**
 * Class file for PayPalTypeRefundTransactionReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRefundTransactionReq
 * @date 14/07/2012
 */
class PayPalTypeRefundTransactionReq extends PayPalWsdlClass
{
	/**
	 * The RefundTransactionRequest
	 * @var PayPalTypeRefundTransactionRequestType
	 */
	public $RefundTransactionRequest;
	/**
	 * Constructor
	 * @param PayPalTypeRefundTransactionRequestType RefundTransactionRequest
	 * @return PayPalTypeRefundTransactionReq
	 */
	public function __construct($_RefundTransactionRequest = null)
	{
		parent::__construct(array('RefundTransactionRequest'=>$_RefundTransactionRequest));
	}
	/**
	 * Set RefundTransactionRequest
	 * @param RefundTransactionRequestType RefundTransactionRequest
	 * @return RefundTransactionRequestType
	 */
	public function setRefundTransactionRequest($_RefundTransactionRequest)
	{
		return ($this->RefundTransactionRequest = $_RefundTransactionRequest);
	}
	/**
	 * Get RefundTransactionRequest
	 * @return PayPalTypeRefundTransactionRequestType
	 */
	public function getRefundTransactionRequest()
	{
		return $this->RefundTransactionRequest;
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