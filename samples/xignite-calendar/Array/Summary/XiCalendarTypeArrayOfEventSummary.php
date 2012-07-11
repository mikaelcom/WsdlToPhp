<?php
/**
 * Class file for XiCalendarTypeArrayOfEventSummary
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeArrayOfEventSummary
 * @date 08/07/2012
 */
class XiCalendarTypeArrayOfEventSummary extends XiCalendarWsdlClass
{
	/**
	 * The EventSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCalendarTypeEventSummary
	 */
	public $EventSummary;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummary EventSummary
	 * @return XiCalendarTypeArrayOfEventSummary
	 */
	public function __construct($_EventSummary = null)
	{
		parent::__construct(array('EventSummary'=>$_EventSummary));
	}
	/**
	 * Set EventSummary
	 * @param EventSummary EventSummary
	 * @return EventSummary
	 */
	public function setEventSummary($_EventSummary)
	{
		return ($this->EventSummary = $_EventSummary);
	}
	/**
	 * Get EventSummary
	 * @return XiCalendarTypeEventSummary
	 */
	public function getEventSummary()
	{
		return $this->EventSummary;
	}
	/**
	 * Returns the current element
	 * @see XiCalendarWsdlClass::current()
	 * @return XiCalendarTypeEventSummary
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCalendarWsdlClass::item()
	 * @param int
	 * @return XiCalendarTypeEventSummary
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::first()
	 * @return XiCalendarTypeEventSummary
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::last()
	 * @return XiCalendarTypeEventSummary
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiCalendarTypeEventSummary
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EventSummary'
	 */
	public function getAttributeName()
	{
		return 'EventSummary';
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