<?php
/**
 * Class file for XiCalendarTypeGetEventsByEventName
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsByEventName
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsByEventName extends XiCalendarWsdlClass
{
	/**
	 * The EventName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventName;
	/**
	 * The ReleasedOnStart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedOnStart;
	/**
	 * The ReleasedOnEnd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedOnEnd;
	/**
	 * Constructor
	 * @param string EventName
	 * @param string ReleasedOnStart
	 * @param string ReleasedOnEnd
	 * @return XiCalendarTypeGetEventsByEventName
	 */
	public function __construct($_EventName = null,$_ReleasedOnStart = null,$_ReleasedOnEnd = null)
	{
		parent::__construct(array('EventName'=>$_EventName,'ReleasedOnStart'=>$_ReleasedOnStart,'ReleasedOnEnd'=>$_ReleasedOnEnd));
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
	 * Set ReleasedOnStart
	 * @param string ReleasedOnStart
	 * @return string
	 */
	public function setReleasedOnStart($_ReleasedOnStart)
	{
		return ($this->ReleasedOnStart = $_ReleasedOnStart);
	}
	/**
	 * Get ReleasedOnStart
	 * @return string
	 */
	public function getReleasedOnStart()
	{
		return $this->ReleasedOnStart;
	}
	/**
	 * Set ReleasedOnEnd
	 * @param string ReleasedOnEnd
	 * @return string
	 */
	public function setReleasedOnEnd($_ReleasedOnEnd)
	{
		return ($this->ReleasedOnEnd = $_ReleasedOnEnd);
	}
	/**
	 * Get ReleasedOnEnd
	 * @return string
	 */
	public function getReleasedOnEnd()
	{
		return $this->ReleasedOnEnd;
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