<?php
/**
 * Class file for XiEarningsCalendarTypeArrayOfEarningCalendarItemTypes
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeArrayOfEarningCalendarItemTypes
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeArrayOfEarningCalendarItemTypes extends XiEarningsCalendarWsdlClass
{
	/**
	 * The EarningCalendarItemTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XiEarningsCalendarTypeEarningCalendarItemTypes
	 */
	public $EarningCalendarItemTypes;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarItemTypes EarningCalendarItemTypes
	 * @return XiEarningsCalendarTypeArrayOfEarningCalendarItemTypes
	 */
	public function __construct($_EarningCalendarItemTypes = null)
	{
		parent::__construct(array('EarningCalendarItemTypes'=>$_EarningCalendarItemTypes));
	}
	/**
	 * Set EarningCalendarItemTypes
	 * @param EarningCalendarItemTypes EarningCalendarItemTypes
	 * @return EarningCalendarItemTypes
	 */
	public function setEarningCalendarItemTypes($_EarningCalendarItemTypes)
	{
		return ($this->EarningCalendarItemTypes = $_EarningCalendarItemTypes);
	}
	/**
	 * Get EarningCalendarItemTypes
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
	 */
	public function getEarningCalendarItemTypes()
	{
		return $this->EarningCalendarItemTypes;
	}
	/**
	 * Returns the current element
	 * @see XiEarningsCalendarWsdlClass::current()
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEarningsCalendarWsdlClass::item()
	 * @param int
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::first()
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::last()
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see XiEarningsCalendarWsdlClass::add()
	 * @param XiEarningsCalendarTypeEarningCalendarItemTypes
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return XiEarningsCalendarTypeEarningCalendarItemTypes::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'EarningCalendarItemTypes'
	 */
	public function getAttributeName()
	{
		return 'EarningCalendarItemTypes';
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