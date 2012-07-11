<?php
/**
 * Class file for XWeb1003TypeHousing_Expense
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeHousing_Expense
 * @date 09/07/2012
 */
class XWeb1003TypeHousing_Expense extends XWeb1003WsdlClass
{
	/**
	 * The Expense
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 2
	 * @var XWeb1003TypeExpenseType
	 */
	public $Expense;
	/**
	 * Constructor
	 * @param XWeb1003TypeExpenseType Expense
	 * @return XWeb1003TypeHousing_Expense
	 */
	public function __construct($_Expense = null)
	{
		parent::__construct(array('Expense'=>$_Expense));
	}
	/**
	 * Set Expense
	 * @param ExpenseType Expense
	 * @return ExpenseType
	 */
	public function setExpense($_Expense)
	{
		return ($this->Expense = $_Expense);
	}
	/**
	 * Get Expense
	 * @return XWeb1003TypeExpenseType
	 */
	public function getExpense()
	{
		return $this->Expense;
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