<?php
/**
 * Class file for PayPalTypeGetTransactionDetailsReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetTransactionDetailsReq
 * @date 14/07/2012
 */
class PayPalTypeGetTransactionDetailsReq extends PayPalWsdlClass
{
	/**
	 * The GetTransactionDetailsRequest
	 * @var PayPalTypeGetTransactionDetailsRequestType
	 */
	public $GetTransactionDetailsRequest;
	/**
	 * Constructor
	 * @param PayPalTypeGetTransactionDetailsRequestType GetTransactionDetailsRequest
	 * @return PayPalTypeGetTransactionDetailsReq
	 */
	public function __construct($_GetTransactionDetailsRequest = null)
	{
		parent::__construct(array('GetTransactionDetailsRequest'=>$_GetTransactionDetailsRequest));
	}
	/**
	 * Set GetTransactionDetailsRequest
	 * @param GetTransactionDetailsRequestType GetTransactionDetailsRequest
	 * @return GetTransactionDetailsRequestType
	 */
	public function setGetTransactionDetailsRequest($_GetTransactionDetailsRequest)
	{
		return ($this->GetTransactionDetailsRequest = $_GetTransactionDetailsRequest);
	}
	/**
	 * Get GetTransactionDetailsRequest
	 * @return PayPalTypeGetTransactionDetailsRequestType
	 */
	public function getGetTransactionDetailsRequest()
	{
		return $this->GetTransactionDetailsRequest;
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