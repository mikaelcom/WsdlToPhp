<?php
/**
 * Class file for XiHousingTypeArrayOfMonthlyByState
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeArrayOfMonthlyByState
 * @date 08/07/2012
 */
class XiHousingTypeArrayOfMonthlyByState extends XiHousingWsdlClass
{
	/**
	 * The MonthlyByState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHousingTypeMonthlyByState
	 */
	public $MonthlyByState;
	/**
	 * Constructor
	 * @param XiHousingTypeMonthlyByState MonthlyByState
	 * @return XiHousingTypeArrayOfMonthlyByState
	 */
	public function __construct($_MonthlyByState = null)
	{
		parent::__construct(array('MonthlyByState'=>$_MonthlyByState));
	}
	/**
	 * Set MonthlyByState
	 * @param MonthlyByState MonthlyByState
	 * @return MonthlyByState
	 */
	public function setMonthlyByState($_MonthlyByState)
	{
		return ($this->MonthlyByState = $_MonthlyByState);
	}
	/**
	 * Get MonthlyByState
	 * @return XiHousingTypeMonthlyByState
	 */
	public function getMonthlyByState()
	{
		return $this->MonthlyByState;
	}
	/**
	 * Returns the current element
	 * @see XiHousingWsdlClass::current()
	 * @return XiHousingTypeMonthlyByState
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHousingWsdlClass::item()
	 * @param int
	 * @return XiHousingTypeMonthlyByState
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::first()
	 * @return XiHousingTypeMonthlyByState
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::last()
	 * @return XiHousingTypeMonthlyByState
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::offsetGet()
	 * @param int
	 * @return XiHousingTypeMonthlyByState
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MonthlyByState'
	 */
	public function getAttributeName()
	{
		return 'MonthlyByState';
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