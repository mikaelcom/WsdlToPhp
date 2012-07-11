<?php
/**
 * Class file for XiFinancialsTypeGetIncomeStatementsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetIncomeStatementsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetIncomeStatementsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetIncomeStatementsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfIncomeStatement
	 */
	public $GetIncomeStatementsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfIncomeStatement GetIncomeStatementsResult
	 * @return XiFinancialsTypeGetIncomeStatementsResponse
	 */
	public function __construct($_GetIncomeStatementsResult = null)
	{
		parent::__construct(array('GetIncomeStatementsResult'=>new XiFinancialsTypeArrayOfIncomeStatement($_GetIncomeStatementsResult)));
	}
	/**
	 * Set GetIncomeStatementsResult
	 * @param ArrayOfIncomeStatement GetIncomeStatementsResult
	 * @return ArrayOfIncomeStatement
	 */
	public function setGetIncomeStatementsResult($_GetIncomeStatementsResult)
	{
		return ($this->GetIncomeStatementsResult = $_GetIncomeStatementsResult);
	}
	/**
	 * Get GetIncomeStatementsResult
	 * @return XiFinancialsTypeArrayOfIncomeStatement
	 */
	public function getGetIncomeStatementsResult()
	{
		return $this->GetIncomeStatementsResult;
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