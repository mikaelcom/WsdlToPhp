<?php
/**
 * Class file for XiCalendarTypeGetEventsReleasedForRangeLengthResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsReleasedForRangeLengthResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsReleasedForRangeLengthResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsReleasedForRangeLengthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsReleasedForRangeLengthResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsReleasedForRangeLengthResult
	 * @return XiCalendarTypeGetEventsReleasedForRangeLengthResponse
	 */
	public function __construct($_GetEventsReleasedForRangeLengthResult = null)
	{
		parent::__construct(array('GetEventsReleasedForRangeLengthResult'=>$_GetEventsReleasedForRangeLengthResult));
	}
	/**
	 * Set GetEventsReleasedForRangeLengthResult
	 * @param EventSummaries GetEventsReleasedForRangeLengthResult
	 * @return EventSummaries
	 */
	public function setGetEventsReleasedForRangeLengthResult($_GetEventsReleasedForRangeLengthResult)
	{
		return ($this->GetEventsReleasedForRangeLengthResult = $_GetEventsReleasedForRangeLengthResult);
	}
	/**
	 * Get GetEventsReleasedForRangeLengthResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsReleasedForRangeLengthResult()
	{
		return $this->GetEventsReleasedForRangeLengthResult;
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