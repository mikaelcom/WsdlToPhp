<?php
/**
 * Class file for XWeb1003TypeJob_Related_Expenses
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeJob_Related_Expenses
 * @date 09/07/2012
 */
class XWeb1003TypeJob_Related_Expenses extends XWeb1003WsdlClass
{
	/**
	 * The Job_Related_Expense
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 2
	 * @var XWeb1003TypeJobRelatedExpenseType
	 */
	public $Job_Related_Expense;
	/**
	 * Constructor
	 * @param XWeb1003TypeJobRelatedExpenseType Job_Related_Expense
	 * @return XWeb1003TypeJob_Related_Expenses
	 */
	public function __construct($_Job_Related_Expense = null)
	{
		parent::__construct(array('Job_Related_Expense'=>$_Job_Related_Expense));
	}
	/**
	 * Set Job_Related_Expense
	 * @param JobRelatedExpenseType Job_Related_Expense
	 * @return JobRelatedExpenseType
	 */
	public function setJob_Related_Expense($_Job_Related_Expense)
	{
		return ($this->Job_Related_Expense = $_Job_Related_Expense);
	}
	/**
	 * Get Job_Related_Expense
	 * @return XWeb1003TypeJobRelatedExpenseType
	 */
	public function getJob_Related_Expense()
	{
		return $this->Job_Related_Expense;
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