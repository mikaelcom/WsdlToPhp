<?php
/**
 * Class file for XiCalendarTypeEventCode
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeEventCode
 * @date 08/07/2012
 */
class XiCalendarTypeEventCode extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The EventCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventCode;
	/**
	 * The EventName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventName;
	/**
	 * Constructor
	 * @param string EventCode
	 * @param string EventName
	 * @return XiCalendarTypeEventCode
	 */
	public function __construct($_EventCode = null,$_EventName = null)
	{
		XiCalendarWsdlClass::__construct(array('EventCode'=>$_EventCode,'EventName'=>$_EventName));
	}
	/**
	 * Set EventCode
	 * @param string EventCode
	 * @return string
	 */
	public function setEventCode($_EventCode)
	{
		return ($this->EventCode = $_EventCode);
	}
	/**
	 * Get EventCode
	 * @return string
	 */
	public function getEventCode()
	{
		return $this->EventCode;
	}
	/**
	 * Set EventName
	 * @param string EventName
	 * @return string
	 */
	public function setEventName($_EventName)
	{
		return ($this->EventName = $_EventName);
	}
	/**
	 * Get EventName
	 * @return string
	 */
	public function getEventName()
	{
		return $this->EventName;
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