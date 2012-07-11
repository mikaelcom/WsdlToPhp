<?php
/**
 * Class file for XiCalendarTypeEventCodes
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeEventCodes
 * @date 08/07/2012
 */
class XiCalendarTypeEventCodes extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The EventCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeArrayOfEventCode
	 */
	public $EventCodes;
	/**
	 * Constructor
	 * @param XiCalendarTypeArrayOfEventCode EventCodes
	 * @return XiCalendarTypeEventCodes
	 */
	public function __construct($_EventCodes = null)
	{
		XiCalendarWsdlClass::__construct(array('EventCodes'=>new XiCalendarTypeArrayOfEventCode($_EventCodes)));
	}
	/**
	 * Set EventCodes
	 * @param ArrayOfEventCode EventCodes
	 * @return ArrayOfEventCode
	 */
	public function setEventCodes($_EventCodes)
	{
		return ($this->EventCodes = $_EventCodes);
	}
	/**
	 * Get EventCodes
	 * @return XiCalendarTypeArrayOfEventCode
	 */
	public function getEventCodes()
	{
		return $this->EventCodes;
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