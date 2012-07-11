<?php
/**
 * Class file for XiCalendarTypeGetEventsByEventCode
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsByEventCode
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsByEventCode extends XiCalendarWsdlClass
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
	 * @param string EventCode
	 * @param string ReleasedOnStart
	 * @param string ReleasedOnEnd
	 * @return XiCalendarTypeGetEventsByEventCode
	 */
	public function __construct($_EventCode = null,$_ReleasedOnStart = null,$_ReleasedOnEnd = null)
	{
		parent::__construct(array('EventCode'=>$_EventCode,'ReleasedOnStart'=>$_ReleasedOnStart,'ReleasedOnEnd'=>$_ReleasedOnEnd));
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