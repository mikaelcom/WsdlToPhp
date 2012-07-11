<?php
/**
 * Class file for XiInsiderTypeGetIssuerTransactionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetIssuerTransactionsResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetIssuerTransactionsResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetIssuerTransactionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIssuerTransactions
	 */
	public $GetIssuerTransactionsResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeIssuerTransactions GetIssuerTransactionsResult
	 * @return XiInsiderTypeGetIssuerTransactionsResponse
	 */
	public function __construct($_GetIssuerTransactionsResult = null)
	{
		parent::__construct(array('GetIssuerTransactionsResult'=>$_GetIssuerTransactionsResult));
	}
	/**
	 * Set GetIssuerTransactionsResult
	 * @param IssuerTransactions GetIssuerTransactionsResult
	 * @return IssuerTransactions
	 */
	public function setGetIssuerTransactionsResult($_GetIssuerTransactionsResult)
	{
		return ($this->GetIssuerTransactionsResult = $_GetIssuerTransactionsResult);
	}
	/**
	 * Get GetIssuerTransactionsResult
	 * @return XiInsiderTypeIssuerTransactions
	 */
	public function getGetIssuerTransactionsResult()
	{
		return $this->GetIssuerTransactionsResult;
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