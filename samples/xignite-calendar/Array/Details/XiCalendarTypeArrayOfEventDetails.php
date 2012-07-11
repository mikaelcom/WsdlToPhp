<?php
/**
 * Class file for XiCalendarTypeArrayOfEventDetails
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeArrayOfEventDetails
 * @date 08/07/2012
 */
class XiCalendarTypeArrayOfEventDetails extends XiCalendarWsdlClass
{
	/**
	 * The EventDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCalendarTypeEventDetails
	 */
	public $EventDetails;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventDetails EventDetails
	 * @return XiCalendarTypeArrayOfEventDetails
	 */
	public function __construct($_EventDetails = null)
	{
		parent::__construct(array('EventDetails'=>$_EventDetails));
	}
	/**
	 * Set EventDetails
	 * @param EventDetails EventDetails
	 * @return EventDetails
	 */
	public function setEventDetails($_EventDetails)
	{
		return ($this->EventDetails = $_EventDetails);
	}
	/**
	 * Get EventDetails
	 * @return XiCalendarTypeEventDetails
	 */
	public function getEventDetails()
	{
		return $this->EventDetails;
	}
	/**
	 * Returns the current element
	 * @see XiCalendarWsdlClass::current()
	 * @return XiCalendarTypeEventDetails
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCalendarWsdlClass::item()
	 * @param int
	 * @return XiCalendarTypeEventDetails
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::first()
	 * @return XiCalendarTypeEventDetails
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::last()
	 * @return XiCalendarTypeEventDetails
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiCalendarTypeEventDetails
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EventDetails'
	 */
	public function getAttributeName()
	{
		return 'EventDetails';
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