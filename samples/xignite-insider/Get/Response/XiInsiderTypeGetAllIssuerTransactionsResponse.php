<?php
/**
 * Class file for XiInsiderTypeGetAllIssuerTransactionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetAllIssuerTransactionsResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetAllIssuerTransactionsResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetAllIssuerTransactionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIssuerTransactions
	 */
	public $GetAllIssuerTransactionsResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeIssuerTransactions GetAllIssuerTransactionsResult
	 * @return XiInsiderTypeGetAllIssuerTransactionsResponse
	 */
	public function __construct($_GetAllIssuerTransactionsResult = null)
	{
		parent::__construct(array('GetAllIssuerTransactionsResult'=>$_GetAllIssuerTransactionsResult));
	}
	/**
	 * Set GetAllIssuerTransactionsResult
	 * @param IssuerTransactions GetAllIssuerTransactionsResult
	 * @return IssuerTransactions
	 */
	public function setGetAllIssuerTransactionsResult($_GetAllIssuerTransactionsResult)
	{
		return ($this->GetAllIssuerTransactionsResult = $_GetAllIssuerTransactionsResult);
	}
	/**
	 * Get GetAllIssuerTransactionsResult
	 * @return XiInsiderTypeIssuerTransactions
	 */
	public function getGetAllIssuerTransactionsResult()
	{
		return $this->GetAllIssuerTransactionsResult;
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