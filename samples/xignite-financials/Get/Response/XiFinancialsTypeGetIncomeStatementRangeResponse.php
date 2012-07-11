<?php
/**
 * Class file for XiFinancialsTypeGetIncomeStatementRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetIncomeStatementRangeResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetIncomeStatementRangeResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetIncomeStatementRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfIncomeStatement
	 */
	public $GetIncomeStatementRangeResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfIncomeStatement GetIncomeStatementRangeResult
	 * @return XiFinancialsTypeGetIncomeStatementRangeResponse
	 */
	public function __construct($_GetIncomeStatementRangeResult = null)
	{
		parent::__construct(array('GetIncomeStatementRangeResult'=>new XiFinancialsTypeArrayOfIncomeStatement($_GetIncomeStatementRangeResult)));
	}
	/**
	 * Set GetIncomeStatementRangeResult
	 * @param ArrayOfIncomeStatement GetIncomeStatementRangeResult
	 * @return ArrayOfIncomeStatement
	 */
	public function setGetIncomeStatementRangeResult($_GetIncomeStatementRangeResult)
	{
		return ($this->GetIncomeStatementRangeResult = $_GetIncomeStatementRangeResult);
	}
	/**
	 * Get GetIncomeStatementRangeResult
	 * @return XiFinancialsTypeArrayOfIncomeStatement
	 */
	public function getGetIncomeStatementRangeResult()
	{
		return $this->GetIncomeStatementRangeResult;
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