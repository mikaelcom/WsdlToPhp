<?php
/**
 * Class file for XiCalendarTypeGetEventsForTomorrowResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForTomorrowResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForTomorrowResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForTomorrowResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForTomorrowResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForTomorrowResult
	 * @return XiCalendarTypeGetEventsForTomorrowResponse
	 */
	public function __construct($_GetEventsForTomorrowResult = null)
	{
		parent::__construct(array('GetEventsForTomorrowResult'=>$_GetEventsForTomorrowResult));
	}
	/**
	 * Set GetEventsForTomorrowResult
	 * @param EventSummaries GetEventsForTomorrowResult
	 * @return EventSummaries
	 */
	public function setGetEventsForTomorrowResult($_GetEventsForTomorrowResult)
	{
		return ($this->GetEventsForTomorrowResult = $_GetEventsForTomorrowResult);
	}
	/**
	 * Get GetEventsForTomorrowResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForTomorrowResult()
	{
		return $this->GetEventsForTomorrowResult;
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