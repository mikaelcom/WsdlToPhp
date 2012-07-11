<?php
/**
 * Class file for XiFundDataTypeFixedIncomeAllocation
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFixedIncomeAllocation
 * @date 08/07/2012
 */
class XiFundDataTypeFixedIncomeAllocation extends XiFundDataWsdlClass
{
	/**
	 * The ShortTerm
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeShortTermDebt
	 */
	public $ShortTerm;
	/**
	 * The LongTem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeLongTermDebt
	 */
	public $LongTem;
	/**
	 * Constructor
	 * @param XiFundDataTypeShortTermDebt ShortTerm
	 * @param XiFundDataTypeLongTermDebt LongTem
	 * @return XiFundDataTypeFixedIncomeAllocation
	 */
	public function __construct($_ShortTerm = null,$_LongTem = null)
	{
		parent::__construct(array('ShortTerm'=>$_ShortTerm,'LongTem'=>$_LongTem));
	}
	/**
	 * Set ShortTerm
	 * @param ShortTermDebt ShortTerm
	 * @return ShortTermDebt
	 */
	public function setShortTerm($_ShortTerm)
	{
		return ($this->ShortTerm = $_ShortTerm);
	}
	/**
	 * Get ShortTerm
	 * @return XiFundDataTypeShortTermDebt
	 */
	public function getShortTerm()
	{
		return $this->ShortTerm;
	}
	/**
	 * Set LongTem
	 * @param LongTermDebt LongTem
	 * @return LongTermDebt
	 */
	public function setLongTem($_LongTem)
	{
		return ($this->LongTem = $_LongTem);
	}
	/**
	 * Get LongTem
	 * @return XiFundDataTypeLongTermDebt
	 */
	public function getLongTem()
	{
		return $this->LongTem;
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