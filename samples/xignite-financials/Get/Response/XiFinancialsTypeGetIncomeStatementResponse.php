<?php
/**
 * Class file for XiFinancialsTypeGetIncomeStatementResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetIncomeStatementResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetIncomeStatementResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetIncomeStatementResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeIncomeStatement
	 */
	public $GetIncomeStatementResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeIncomeStatement GetIncomeStatementResult
	 * @return XiFinancialsTypeGetIncomeStatementResponse
	 */
	public function __construct($_GetIncomeStatementResult = null)
	{
		parent::__construct(array('GetIncomeStatementResult'=>$_GetIncomeStatementResult));
	}
	/**
	 * Set GetIncomeStatementResult
	 * @param IncomeStatement GetIncomeStatementResult
	 * @return IncomeStatement
	 */
	public function setGetIncomeStatementResult($_GetIncomeStatementResult)
	{
		return ($this->GetIncomeStatementResult = $_GetIncomeStatementResult);
	}
	/**
	 * Get GetIncomeStatementResult
	 * @return XiFinancialsTypeIncomeStatement
	 */
	public function getGetIncomeStatementResult()
	{
		return $this->GetIncomeStatementResult;
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