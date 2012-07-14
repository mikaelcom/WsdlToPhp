<?php
/**
 * Class file for PayPalTypeReverseTransactionReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReverseTransactionReq
 * @date 14/07/2012
 */
class PayPalTypeReverseTransactionReq extends PayPalWsdlClass
{
	/**
	 * The ReverseTransactionRequest
	 * @var PayPalTypeReverseTransactionRequestType
	 */
	public $ReverseTransactionRequest;
	/**
	 * Constructor
	 * @param PayPalTypeReverseTransactionRequestType ReverseTransactionRequest
	 * @return PayPalTypeReverseTransactionReq
	 */
	public function __construct($_ReverseTransactionRequest = null)
	{
		parent::__construct(array('ReverseTransactionRequest'=>$_ReverseTransactionRequest));
	}
	/**
	 * Set ReverseTransactionRequest
	 * @param ReverseTransactionRequestType ReverseTransactionRequest
	 * @return ReverseTransactionRequestType
	 */
	public function setReverseTransactionRequest($_ReverseTransactionRequest)
	{
		return ($this->ReverseTransactionRequest = $_ReverseTransactionRequest);
	}
	/**
	 * Get ReverseTransactionRequest
	 * @return PayPalTypeReverseTransactionRequestType
	 */
	public function getReverseTransactionRequest()
	{
		return $this->ReverseTransactionRequest;
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