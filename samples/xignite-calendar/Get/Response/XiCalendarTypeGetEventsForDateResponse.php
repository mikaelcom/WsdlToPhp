<?php
/**
 * Class file for XiCalendarTypeGetEventsForDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForDateResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForDateResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForDateResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForDateResult
	 * @return XiCalendarTypeGetEventsForDateResponse
	 */
	public function __construct($_GetEventsForDateResult = null)
	{
		parent::__construct(array('GetEventsForDateResult'=>$_GetEventsForDateResult));
	}
	/**
	 * Set GetEventsForDateResult
	 * @param EventSummaries GetEventsForDateResult
	 * @return EventSummaries
	 */
	public function setGetEventsForDateResult($_GetEventsForDateResult)
	{
		return ($this->GetEventsForDateResult = $_GetEventsForDateResult);
	}
	/**
	 * Get GetEventsForDateResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForDateResult()
	{
		return $this->GetEventsForDateResult;
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