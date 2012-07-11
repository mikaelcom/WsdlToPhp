<?php
/**
 * Class file for XWeb1003TypeJobRelatedExpenseType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeJobRelatedExpenseType
 * @date 09/07/2012
 */
class XWeb1003TypeJobRelatedExpenseType extends XWeb1003WsdlClass
{
	/**
	 * The Description
	 * @var Description
	 */
	public $Description;
	/**
	 * The Monthly_Payment
	 * @var Monthly_Payment
	 */
	public $Monthly_Payment;
	/**
	 * The Months_Left
	 * @var Months_Left
	 */
	public $Months_Left;
	/**
	 * The Job_Related_Expense_Sequence
	 * @var anonymous177
	 */
	public $Job_Related_Expense_Sequence;
	/**
	 * Constructor
	 * @param Description Description
	 * @param Monthly_Payment Monthly_Payment
	 * @param Months_Left Months_Left
	 * @param anonymous177 Job_Related_Expense_Sequence
	 * @return XWeb1003TypeJobRelatedExpenseType
	 */
	public function __construct($_Description = null,$_Monthly_Payment = null,$_Months_Left = null,$_Job_Related_Expense_Sequence = null)
	{
		parent::__construct(array('Description'=>$_Description,'Monthly_Payment'=>$_Monthly_Payment,'Months_Left'=>$_Months_Left,'Job_Related_Expense_Sequence'=>$_Job_Related_Expense_Sequence));
	}
	/**
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Monthly_Payment
	 * @param Monthly_Payment Monthly_Payment
	 * @return Monthly_Payment
	 */
	public function setMonthly_Payment($_Monthly_Payment)
	{
		return ($this->Monthly_Payment = $_Monthly_Payment);
	}
	/**
	 * Get Monthly_Payment
	 * @return Monthly_Payment
	 */
	public function getMonthly_Payment()
	{
		return $this->Monthly_Payment;
	}
	/**
	 * Set Months_Left
	 * @param Months_Left Months_Left
	 * @return Months_Left
	 */
	public function setMonths_Left($_Months_Left)
	{
		return ($this->Months_Left = $_Months_Left);
	}
	/**
	 * Get Months_Left
	 * @return Months_Left
	 */
	public function getMonths_Left()
	{
		return $this->Months_Left;
	}
	/**
	 * Set Job_Related_Expense_Sequence
	 * @param anonymous177 Job_Related_Expense_Sequence
	 * @return anonymous177
	 */
	public function setJob_Related_Expense_Sequence($_Job_Related_Expense_Sequence)
	{
		return ($this->Job_Related_Expense_Sequence = $_Job_Related_Expense_Sequence);
	}
	/**
	 * Get Job_Related_Expense_Sequence
	 * @return anonymous177
	 */
	public function getJob_Related_Expense_Sequence()
	{
		return $this->Job_Related_Expense_Sequence;
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