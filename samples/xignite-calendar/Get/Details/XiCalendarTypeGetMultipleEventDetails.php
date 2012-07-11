<?php
/**
 * Class file for XiCalendarTypeGetMultipleEventDetails
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetMultipleEventDetails
 * @date 08/07/2012
 */
class XiCalendarTypeGetMultipleEventDetails extends XiCalendarWsdlClass
{
	/**
	 * The EventIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventIDs;
	/**
	 * Constructor
	 * @param string EventIDs
	 * @return XiCalendarTypeGetMultipleEventDetails
	 */
	public function __construct($_EventIDs = null)
	{
		parent::__construct(array('EventIDs'=>$_EventIDs));
	}
	/**
	 * Set EventIDs
	 * @param string EventIDs
	 * @return string
	 */
	public function setEventIDs($_EventIDs)
	{
		return ($this->EventIDs = $_EventIDs);
	}
	/**
	 * Get EventIDs
	 * @return string
	 */
	public function getEventIDs()
	{
		return $this->EventIDs;
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