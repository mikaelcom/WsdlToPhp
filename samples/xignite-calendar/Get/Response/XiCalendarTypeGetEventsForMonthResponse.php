<?php
/**
 * Class file for XiCalendarTypeGetEventsForMonthResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForMonthResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForMonthResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForMonthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForMonthResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForMonthResult
	 * @return XiCalendarTypeGetEventsForMonthResponse
	 */
	public function __construct($_GetEventsForMonthResult = null)
	{
		parent::__construct(array('GetEventsForMonthResult'=>$_GetEventsForMonthResult));
	}
	/**
	 * Set GetEventsForMonthResult
	 * @param EventSummaries GetEventsForMonthResult
	 * @return EventSummaries
	 */
	public function setGetEventsForMonthResult($_GetEventsForMonthResult)
	{
		return ($this->GetEventsForMonthResult = $_GetEventsForMonthResult);
	}
	/**
	 * Get GetEventsForMonthResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForMonthResult()
	{
		return $this->GetEventsForMonthResult;
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