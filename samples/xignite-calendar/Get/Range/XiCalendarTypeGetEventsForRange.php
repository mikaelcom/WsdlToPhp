<?php
/**
 * Class file for XiCalendarTypeGetEventsForRange
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForRange
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForRange extends XiCalendarWsdlClass
{
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
	 * @param string ReleasedOnStart
	 * @param string ReleasedOnEnd
	 * @return XiCalendarTypeGetEventsForRange
	 */
	public function __construct($_ReleasedOnStart = null,$_ReleasedOnEnd = null)
	{
		parent::__construct(array('ReleasedOnStart'=>$_ReleasedOnStart,'ReleasedOnEnd'=>$_ReleasedOnEnd));
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