<?php
/**
 * Class file for XiEarningsCalendarTypeArrayOfEarningCalendarDay
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeArrayOfEarningCalendarDay
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeArrayOfEarningCalendarDay extends XiEarningsCalendarWsdlClass
{
	/**
	 * The EarningCalendarDay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEarningsCalendarTypeEarningCalendarDay
	 */
	public $EarningCalendarDay;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarDay EarningCalendarDay
	 * @return XiEarningsCalendarTypeArrayOfEarningCalendarDay
	 */
	public function __construct($_EarningCalendarDay = null)
	{
		parent::__construct(array('EarningCalendarDay'=>$_EarningCalendarDay));
	}
	/**
	 * Set EarningCalendarDay
	 * @param EarningCalendarDay EarningCalendarDay
	 * @return EarningCalendarDay
	 */
	public function setEarningCalendarDay($_EarningCalendarDay)
	{
		return ($this->EarningCalendarDay = $_EarningCalendarDay);
	}
	/**
	 * Get EarningCalendarDay
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function getEarningCalendarDay()
	{
		return $this->EarningCalendarDay;
	}
	/**
	 * Returns the current element
	 * @see XiEarningsCalendarWsdlClass::current()
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEarningsCalendarWsdlClass::item()
	 * @param int
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::first()
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::last()
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EarningCalendarDay'
	 */
	public function getAttributeName()
	{
		return 'EarningCalendarDay';
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