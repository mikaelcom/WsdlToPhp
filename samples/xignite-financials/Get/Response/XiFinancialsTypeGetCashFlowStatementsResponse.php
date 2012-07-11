<?php
/**
 * Class file for XiFinancialsTypeGetCashFlowStatementsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetCashFlowStatementsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetCashFlowStatementsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetCashFlowStatementsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfCashFlowStatement
	 */
	public $GetCashFlowStatementsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfCashFlowStatement GetCashFlowStatementsResult
	 * @return XiFinancialsTypeGetCashFlowStatementsResponse
	 */
	public function __construct($_GetCashFlowStatementsResult = null)
	{
		parent::__construct(array('GetCashFlowStatementsResult'=>new XiFinancialsTypeArrayOfCashFlowStatement($_GetCashFlowStatementsResult)));
	}
	/**
	 * Set GetCashFlowStatementsResult
	 * @param ArrayOfCashFlowStatement GetCashFlowStatementsResult
	 * @return ArrayOfCashFlowStatement
	 */
	public function setGetCashFlowStatementsResult($_GetCashFlowStatementsResult)
	{
		return ($this->GetCashFlowStatementsResult = $_GetCashFlowStatementsResult);
	}
	/**
	 * Get GetCashFlowStatementsResult
	 * @return XiFinancialsTypeArrayOfCashFlowStatement
	 */
	public function getGetCashFlowStatementsResult()
	{
		return $this->GetCashFlowStatementsResult;
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