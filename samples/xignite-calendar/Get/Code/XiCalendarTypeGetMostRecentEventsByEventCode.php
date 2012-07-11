<?php
/**
 * Class file for XiCalendarTypeGetMostRecentEventsByEventCode
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetMostRecentEventsByEventCode
 * @date 08/07/2012
 */
class XiCalendarTypeGetMostRecentEventsByEventCode extends XiCalendarWsdlClass
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
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param string EventCode
	 * @param int Count
	 * @return XiCalendarTypeGetMostRecentEventsByEventCode
	 */
	public function __construct($_EventCode = null,$_Count)
	{
		parent::__construct(array('EventCode'=>$_EventCode,'Count'=>$_Count));
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
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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