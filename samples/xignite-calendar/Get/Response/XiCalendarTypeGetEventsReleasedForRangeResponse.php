<?php
/**
 * Class file for XiCalendarTypeGetEventsReleasedForRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsReleasedForRangeResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsReleasedForRangeResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsReleasedForRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsReleasedForRangeResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsReleasedForRangeResult
	 * @return XiCalendarTypeGetEventsReleasedForRangeResponse
	 */
	public function __construct($_GetEventsReleasedForRangeResult = null)
	{
		parent::__construct(array('GetEventsReleasedForRangeResult'=>$_GetEventsReleasedForRangeResult));
	}
	/**
	 * Set GetEventsReleasedForRangeResult
	 * @param EventSummaries GetEventsReleasedForRangeResult
	 * @return EventSummaries
	 */
	public function setGetEventsReleasedForRangeResult($_GetEventsReleasedForRangeResult)
	{
		return ($this->GetEventsReleasedForRangeResult = $_GetEventsReleasedForRangeResult);
	}
	/**
	 * Get GetEventsReleasedForRangeResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsReleasedForRangeResult()
	{
		return $this->GetEventsReleasedForRangeResult;
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