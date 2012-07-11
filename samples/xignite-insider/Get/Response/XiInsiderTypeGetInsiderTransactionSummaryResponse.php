<?php
/**
 * Class file for XiInsiderTypeGetInsiderTransactionSummaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetInsiderTransactionSummaryResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetInsiderTransactionSummaryResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetInsiderTransactionSummaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsiderTransactionSummary
	 */
	public $GetInsiderTransactionSummaryResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsiderTransactionSummary GetInsiderTransactionSummaryResult
	 * @return XiInsiderTypeGetInsiderTransactionSummaryResponse
	 */
	public function __construct($_GetInsiderTransactionSummaryResult = null)
	{
		parent::__construct(array('GetInsiderTransactionSummaryResult'=>$_GetInsiderTransactionSummaryResult));
	}
	/**
	 * Set GetInsiderTransactionSummaryResult
	 * @param InsiderTransactionSummary GetInsiderTransactionSummaryResult
	 * @return InsiderTransactionSummary
	 */
	public function setGetInsiderTransactionSummaryResult($_GetInsiderTransactionSummaryResult)
	{
		return ($this->GetInsiderTransactionSummaryResult = $_GetInsiderTransactionSummaryResult);
	}
	/**
	 * Get GetInsiderTransactionSummaryResult
	 * @return XiInsiderTypeInsiderTransactionSummary
	 */
	public function getGetInsiderTransactionSummaryResult()
	{
		return $this->GetInsiderTransactionSummaryResult;
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