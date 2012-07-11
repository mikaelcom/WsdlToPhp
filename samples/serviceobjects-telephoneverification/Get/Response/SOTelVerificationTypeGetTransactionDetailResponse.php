<?php
/**
 * Class file for SOTelVerificationTypeGetTransactionDetailResponse
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeGetTransactionDetailResponse
 * @date 08/07/2012
 */
class SOTelVerificationTypeGetTransactionDetailResponse extends SOTelVerificationWsdlClass
{
	/**
	 * The GetTransactionDetailResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeTransactionInfo
	 */
	public $GetTransactionDetailResult;
	/**
	 * Constructor
	 * @param SOTelVerificationTypeTransactionInfo GetTransactionDetailResult
	 * @return SOTelVerificationTypeGetTransactionDetailResponse
	 */
	public function __construct($_GetTransactionDetailResult = null)
	{
		parent::__construct(array('GetTransactionDetailResult'=>$_GetTransactionDetailResult));
	}
	/**
	 * Set GetTransactionDetailResult
	 * @param TransactionInfo GetTransactionDetailResult
	 * @return TransactionInfo
	 */
	public function setGetTransactionDetailResult($_GetTransactionDetailResult)
	{
		return ($this->GetTransactionDetailResult = $_GetTransactionDetailResult);
	}
	/**
	 * Get GetTransactionDetailResult
	 * @return SOTelVerificationTypeTransactionInfo
	 */
	public function getGetTransactionDetailResult()
	{
		return $this->GetTransactionDetailResult;
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