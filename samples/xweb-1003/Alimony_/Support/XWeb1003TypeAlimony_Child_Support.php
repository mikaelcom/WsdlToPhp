<?php
/**
 * Class file for XWeb1003TypeAlimony_Child_Support
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeAlimony_Child_Support
 * @date 09/07/2012
 */
class XWeb1003TypeAlimony_Child_Support extends XWeb1003WsdlClass
{
	/**
	 * The Owed_To
	 * @var Owed_To
	 */
	public $Owed_To;
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
	 * Constructor
	 * @param Owed_To Owed_To
	 * @param Monthly_Payment Monthly_Payment
	 * @param Months_Left Months_Left
	 * @return XWeb1003TypeAlimony_Child_Support
	 */
	public function __construct($_Owed_To = null,$_Monthly_Payment = null,$_Months_Left = null)
	{
		parent::__construct(array('Owed_To'=>$_Owed_To,'Monthly_Payment'=>$_Monthly_Payment,'Months_Left'=>$_Months_Left));
	}
	/**
	 * Set Owed_To
	 * @param Owed_To Owed_To
	 * @return Owed_To
	 */
	public function setOwed_To($_Owed_To)
	{
		return ($this->Owed_To = $_Owed_To);
	}
	/**
	 * Get Owed_To
	 * @return Owed_To
	 */
	public function getOwed_To()
	{
		return $this->Owed_To;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>