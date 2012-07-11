<?php
/**
 * Class file for XiCalendarTypeGetEventsForNextNumberOfDaysResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForNextNumberOfDaysResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForNextNumberOfDaysResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForNextNumberOfDaysResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForNextNumberOfDaysResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForNextNumberOfDaysResult
	 * @return XiCalendarTypeGetEventsForNextNumberOfDaysResponse
	 */
	public function __construct($_GetEventsForNextNumberOfDaysResult = null)
	{
		parent::__construct(array('GetEventsForNextNumberOfDaysResult'=>$_GetEventsForNextNumberOfDaysResult));
	}
	/**
	 * Set GetEventsForNextNumberOfDaysResult
	 * @param EventSummaries GetEventsForNextNumberOfDaysResult
	 * @return EventSummaries
	 */
	public function setGetEventsForNextNumberOfDaysResult($_GetEventsForNextNumberOfDaysResult)
	{
		return ($this->GetEventsForNextNumberOfDaysResult = $_GetEventsForNextNumberOfDaysResult);
	}
	/**
	 * Get GetEventsForNextNumberOfDaysResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForNextNumberOfDaysResult()
	{
		return $this->GetEventsForNextNumberOfDaysResult;
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