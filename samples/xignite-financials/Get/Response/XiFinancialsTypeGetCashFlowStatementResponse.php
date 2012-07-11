<?php
/**
 * Class file for XiFinancialsTypeGetCashFlowStatementResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetCashFlowStatementResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetCashFlowStatementResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetCashFlowStatementResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeCashFlowStatement
	 */
	public $GetCashFlowStatementResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeCashFlowStatement GetCashFlowStatementResult
	 * @return XiFinancialsTypeGetCashFlowStatementResponse
	 */
	public function __construct($_GetCashFlowStatementResult = null)
	{
		parent::__construct(array('GetCashFlowStatementResult'=>$_GetCashFlowStatementResult));
	}
	/**
	 * Set GetCashFlowStatementResult
	 * @param CashFlowStatement GetCashFlowStatementResult
	 * @return CashFlowStatement
	 */
	public function setGetCashFlowStatementResult($_GetCashFlowStatementResult)
	{
		return ($this->GetCashFlowStatementResult = $_GetCashFlowStatementResult);
	}
	/**
	 * Get GetCashFlowStatementResult
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function getGetCashFlowStatementResult()
	{
		return $this->GetCashFlowStatementResult;
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