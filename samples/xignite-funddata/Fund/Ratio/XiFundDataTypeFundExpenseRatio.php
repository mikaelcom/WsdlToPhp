<?php
/**
 * Class file for XiFundDataTypeFundExpenseRatio
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundExpenseRatio
 * @date 08/07/2012
 */
class XiFundDataTypeFundExpenseRatio extends XiFundDataTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurity
	 */
	public $Security;
	/**
	 * The ExpenseRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExpenseRatio;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param XiFundDataTypeSecurity Security
	 * @param double ExpenseRatio
	 * @return XiFundDataTypeFundExpenseRatio
	 */
	public function __construct($_AsOfDate = null,$_Security = null,$_ExpenseRatio)
	{
		XiFundDataWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'Security'=>$_Security,'ExpenseRatio'=>$_ExpenseRatio));
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiFundDataTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ExpenseRatio
	 * @param double ExpenseRatio
	 * @return double
	 */
	public function setExpenseRatio($_ExpenseRatio)
	{
		return ($this->ExpenseRatio = $_ExpenseRatio);
	}
	/**
	 * Get ExpenseRatio
	 * @return double
	 */
	public function getExpenseRatio()
	{
		return $this->ExpenseRatio;
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