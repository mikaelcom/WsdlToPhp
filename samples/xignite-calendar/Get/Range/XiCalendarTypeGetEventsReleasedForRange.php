<?php
/**
 * Class file for XiCalendarTypeGetEventsReleasedForRange
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsReleasedForRange
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsReleasedForRange extends XiCalendarWsdlClass
{
	/**
	 * The ReleasedForStart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedForStart;
	/**
	 * The ReleasedForEnd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedForEnd;
	/**
	 * Constructor
	 * @param string ReleasedForStart
	 * @param string ReleasedForEnd
	 * @return XiCalendarTypeGetEventsReleasedForRange
	 */
	public function __construct($_ReleasedForStart = null,$_ReleasedForEnd = null)
	{
		parent::__construct(array('ReleasedForStart'=>$_ReleasedForStart,'ReleasedForEnd'=>$_ReleasedForEnd));
	}
	/**
	 * Set ReleasedForStart
	 * @param string ReleasedForStart
	 * @return string
	 */
	public function setReleasedForStart($_ReleasedForStart)
	{
		return ($this->ReleasedForStart = $_ReleasedForStart);
	}
	/**
	 * Get ReleasedForStart
	 * @return string
	 */
	public function getReleasedForStart()
	{
		return $this->ReleasedForStart;
	}
	/**
	 * Set ReleasedForEnd
	 * @param string ReleasedForEnd
	 * @return string
	 */
	public function setReleasedForEnd($_ReleasedForEnd)
	{
		return ($this->ReleasedForEnd = $_ReleasedForEnd);
	}
	/**
	 * Get ReleasedForEnd
	 * @return string
	 */
	public function getReleasedForEnd()
	{
		return $this->ReleasedForEnd;
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