<?php
/**
 * Class file for XiInsiderTypeGetIssuerTransactionSummaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetIssuerTransactionSummaryResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetIssuerTransactionSummaryResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetIssuerTransactionSummaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIssuerTransactionSummary
	 */
	public $GetIssuerTransactionSummaryResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeIssuerTransactionSummary GetIssuerTransactionSummaryResult
	 * @return XiInsiderTypeGetIssuerTransactionSummaryResponse
	 */
	public function __construct($_GetIssuerTransactionSummaryResult = null)
	{
		parent::__construct(array('GetIssuerTransactionSummaryResult'=>$_GetIssuerTransactionSummaryResult));
	}
	/**
	 * Set GetIssuerTransactionSummaryResult
	 * @param IssuerTransactionSummary GetIssuerTransactionSummaryResult
	 * @return IssuerTransactionSummary
	 */
	public function setGetIssuerTransactionSummaryResult($_GetIssuerTransactionSummaryResult)
	{
		return ($this->GetIssuerTransactionSummaryResult = $_GetIssuerTransactionSummaryResult);
	}
	/**
	 * Get GetIssuerTransactionSummaryResult
	 * @return XiInsiderTypeIssuerTransactionSummary
	 */
	public function getGetIssuerTransactionSummaryResult()
	{
		return $this->GetIssuerTransactionSummaryResult;
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