<?php
/**
 * Class file for XiCalendarTypeMultipleEventDetails
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeMultipleEventDetails
 * @date 08/07/2012
 */
class XiCalendarTypeMultipleEventDetails extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The Details
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeArrayOfEventDetails
	 */
	public $Details;
	/**
	 * Constructor
	 * @param XiCalendarTypeArrayOfEventDetails Details
	 * @return XiCalendarTypeMultipleEventDetails
	 */
	public function __construct($_Details = null)
	{
		XiCalendarWsdlClass::__construct(array('Details'=>new XiCalendarTypeArrayOfEventDetails($_Details)));
	}
	/**
	 * Set Details
	 * @param ArrayOfEventDetails Details
	 * @return ArrayOfEventDetails
	 */
	public function setDetails($_Details)
	{
		return ($this->Details = $_Details);
	}
	/**
	 * Get Details
	 * @return XiCalendarTypeArrayOfEventDetails
	 */
	public function getDetails()
	{
		return $this->Details;
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