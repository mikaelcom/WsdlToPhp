<?php
/**
 * Class file for PayPalTypeTransactionSearchReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTransactionSearchReq
 * @date 14/07/2012
 */
class PayPalTypeTransactionSearchReq extends PayPalWsdlClass
{
	/**
	 * The TransactionSearchRequest
	 * @var PayPalTypeTransactionSearchRequestType
	 */
	public $TransactionSearchRequest;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionSearchRequestType TransactionSearchRequest
	 * @return PayPalTypeTransactionSearchReq
	 */
	public function __construct($_TransactionSearchRequest = null)
	{
		parent::__construct(array('TransactionSearchRequest'=>$_TransactionSearchRequest));
	}
	/**
	 * Set TransactionSearchRequest
	 * @param TransactionSearchRequestType TransactionSearchRequest
	 * @return TransactionSearchRequestType
	 */
	public function setTransactionSearchRequest($_TransactionSearchRequest)
	{
		return ($this->TransactionSearchRequest = $_TransactionSearchRequest);
	}
	/**
	 * Get TransactionSearchRequest
	 * @return PayPalTypeTransactionSearchRequestType
	 */
	public function getTransactionSearchRequest()
	{
		return $this->TransactionSearchRequest;
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