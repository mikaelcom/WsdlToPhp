<?php
/**
 * Class file for XiCalendarTypeArrayOfEventCode
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeArrayOfEventCode
 * @date 08/07/2012
 */
class XiCalendarTypeArrayOfEventCode extends XiCalendarWsdlClass
{
	/**
	 * The EventCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCalendarTypeEventCode
	 */
	public $EventCode;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventCode EventCode
	 * @return XiCalendarTypeArrayOfEventCode
	 */
	public function __construct($_EventCode = null)
	{
		parent::__construct(array('EventCode'=>$_EventCode));
	}
	/**
	 * Set EventCode
	 * @param EventCode EventCode
	 * @return EventCode
	 */
	public function setEventCode($_EventCode)
	{
		return ($this->EventCode = $_EventCode);
	}
	/**
	 * Get EventCode
	 * @return XiCalendarTypeEventCode
	 */
	public function getEventCode()
	{
		return $this->EventCode;
	}
	/**
	 * Returns the current element
	 * @see XiCalendarWsdlClass::current()
	 * @return XiCalendarTypeEventCode
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCalendarWsdlClass::item()
	 * @param int
	 * @return XiCalendarTypeEventCode
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::first()
	 * @return XiCalendarTypeEventCode
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::last()
	 * @return XiCalendarTypeEventCode
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiCalendarTypeEventCode
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EventCode'
	 */
	public function getAttributeName()
	{
		return 'EventCode';
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