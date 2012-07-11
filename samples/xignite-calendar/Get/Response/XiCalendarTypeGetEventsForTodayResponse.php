<?php
/**
 * Class file for XiCalendarTypeGetEventsForTodayResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForTodayResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForTodayResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForTodayResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForTodayResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForTodayResult
	 * @return XiCalendarTypeGetEventsForTodayResponse
	 */
	public function __construct($_GetEventsForTodayResult = null)
	{
		parent::__construct(array('GetEventsForTodayResult'=>$_GetEventsForTodayResult));
	}
	/**
	 * Set GetEventsForTodayResult
	 * @param EventSummaries GetEventsForTodayResult
	 * @return EventSummaries
	 */
	public function setGetEventsForTodayResult($_GetEventsForTodayResult)
	{
		return ($this->GetEventsForTodayResult = $_GetEventsForTodayResult);
	}
	/**
	 * Get GetEventsForTodayResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForTodayResult()
	{
		return $this->GetEventsForTodayResult;
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