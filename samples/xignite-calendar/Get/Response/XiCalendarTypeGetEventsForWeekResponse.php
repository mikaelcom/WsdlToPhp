<?php
/**
 * Class file for XiCalendarTypeGetEventsForWeekResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForWeekResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForWeekResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForWeekResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForWeekResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForWeekResult
	 * @return XiCalendarTypeGetEventsForWeekResponse
	 */
	public function __construct($_GetEventsForWeekResult = null)
	{
		parent::__construct(array('GetEventsForWeekResult'=>$_GetEventsForWeekResult));
	}
	/**
	 * Set GetEventsForWeekResult
	 * @param EventSummaries GetEventsForWeekResult
	 * @return EventSummaries
	 */
	public function setGetEventsForWeekResult($_GetEventsForWeekResult)
	{
		return ($this->GetEventsForWeekResult = $_GetEventsForWeekResult);
	}
	/**
	 * Get GetEventsForWeekResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForWeekResult()
	{
		return $this->GetEventsForWeekResult;
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