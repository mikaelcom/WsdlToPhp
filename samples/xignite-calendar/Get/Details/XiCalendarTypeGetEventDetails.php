<?php
/**
 * Class file for XiCalendarTypeGetEventDetails
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventDetails
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventDetails extends XiCalendarWsdlClass
{
	/**
	 * The EventID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventID;
	/**
	 * Constructor
	 * @param string EventID
	 * @return XiCalendarTypeGetEventDetails
	 */
	public function __construct($_EventID = null)
	{
		parent::__construct(array('EventID'=>$_EventID));
	}
	/**
	 * Set EventID
	 * @param string EventID
	 * @return string
	 */
	public function setEventID($_EventID)
	{
		return ($this->EventID = $_EventID);
	}
	/**
	 * Get EventID
	 * @return string
	 */
	public function getEventID()
	{
		return $this->EventID;
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