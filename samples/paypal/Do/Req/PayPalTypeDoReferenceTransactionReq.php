<?php
/**
 * Class file for PayPalTypeDoReferenceTransactionReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReferenceTransactionReq
 * @date 14/07/2012
 */
class PayPalTypeDoReferenceTransactionReq extends PayPalWsdlClass
{
	/**
	 * The DoReferenceTransactionRequest
	 * @var PayPalTypeDoReferenceTransactionRequestType
	 */
	public $DoReferenceTransactionRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoReferenceTransactionRequestType DoReferenceTransactionRequest
	 * @return PayPalTypeDoReferenceTransactionReq
	 */
	public function __construct($_DoReferenceTransactionRequest = null)
	{
		parent::__construct(array('DoReferenceTransactionRequest'=>$_DoReferenceTransactionRequest));
	}
	/**
	 * Set DoReferenceTransactionRequest
	 * @param DoReferenceTransactionRequestType DoReferenceTransactionRequest
	 * @return DoReferenceTransactionRequestType
	 */
	public function setDoReferenceTransactionRequest($_DoReferenceTransactionRequest)
	{
		return ($this->DoReferenceTransactionRequest = $_DoReferenceTransactionRequest);
	}
	/**
	 * Get DoReferenceTransactionRequest
	 * @return PayPalTypeDoReferenceTransactionRequestType
	 */
	public function getDoReferenceTransactionRequest()
	{
		return $this->DoReferenceTransactionRequest;
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