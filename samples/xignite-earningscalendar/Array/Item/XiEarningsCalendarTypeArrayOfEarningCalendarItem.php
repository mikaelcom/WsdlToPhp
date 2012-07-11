<?php
/**
 * Class file for XiEarningsCalendarTypeArrayOfEarningCalendarItem
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeArrayOfEarningCalendarItem
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeArrayOfEarningCalendarItem extends XiEarningsCalendarWsdlClass
{
	/**
	 * The EarningCalendarItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEarningsCalendarTypeEarningCalendarItem
	 */
	public $EarningCalendarItem;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarItem EarningCalendarItem
	 * @return XiEarningsCalendarTypeArrayOfEarningCalendarItem
	 */
	public function __construct($_EarningCalendarItem = null)
	{
		parent::__construct(array('EarningCalendarItem'=>$_EarningCalendarItem));
	}
	/**
	 * Set EarningCalendarItem
	 * @param EarningCalendarItem EarningCalendarItem
	 * @return EarningCalendarItem
	 */
	public function setEarningCalendarItem($_EarningCalendarItem)
	{
		return ($this->EarningCalendarItem = $_EarningCalendarItem);
	}
	/**
	 * Get EarningCalendarItem
	 * @return XiEarningsCalendarTypeEarningCalendarItem
	 */
	public function getEarningCalendarItem()
	{
		return $this->EarningCalendarItem;
	}
	/**
	 * Returns the current element
	 * @see XiEarningsCalendarWsdlClass::current()
	 * @return XiEarningsCalendarTypeEarningCalendarItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEarningsCalendarWsdlClass::item()
	 * @param int
	 * @return XiEarningsCalendarTypeEarningCalendarItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::first()
	 * @return XiEarningsCalendarTypeEarningCalendarItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::last()
	 * @return XiEarningsCalendarTypeEarningCalendarItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEarningsCalendarTypeEarningCalendarItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EarningCalendarItem'
	 */
	public function getAttributeName()
	{
		return 'EarningCalendarItem';
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