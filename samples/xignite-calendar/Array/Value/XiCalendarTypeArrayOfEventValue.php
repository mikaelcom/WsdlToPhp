<?php
/**
 * Class file for XiCalendarTypeArrayOfEventValue
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeArrayOfEventValue
 * @date 08/07/2012
 */
class XiCalendarTypeArrayOfEventValue extends XiCalendarWsdlClass
{
	/**
	 * The EventValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCalendarTypeEventValue
	 */
	public $EventValue;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventValue EventValue
	 * @return XiCalendarTypeArrayOfEventValue
	 */
	public function __construct($_EventValue = null)
	{
		parent::__construct(array('EventValue'=>$_EventValue));
	}
	/**
	 * Set EventValue
	 * @param EventValue EventValue
	 * @return EventValue
	 */
	public function setEventValue($_EventValue)
	{
		return ($this->EventValue = $_EventValue);
	}
	/**
	 * Get EventValue
	 * @return XiCalendarTypeEventValue
	 */
	public function getEventValue()
	{
		return $this->EventValue;
	}
	/**
	 * Returns the current element
	 * @see XiCalendarWsdlClass::current()
	 * @return XiCalendarTypeEventValue
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCalendarWsdlClass::item()
	 * @param int
	 * @return XiCalendarTypeEventValue
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::first()
	 * @return XiCalendarTypeEventValue
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::last()
	 * @return XiCalendarTypeEventValue
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiCalendarTypeEventValue
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EventValue'
	 */
	public function getAttributeName()
	{
		return 'EventValue';
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