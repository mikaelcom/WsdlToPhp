<?php
/**
 * Class file for XiCalendarTypeGetEventsForRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForRangeResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForRangeResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForRangeResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForRangeResult
	 * @return XiCalendarTypeGetEventsForRangeResponse
	 */
	public function __construct($_GetEventsForRangeResult = null)
	{
		parent::__construct(array('GetEventsForRangeResult'=>$_GetEventsForRangeResult));
	}
	/**
	 * Set GetEventsForRangeResult
	 * @param EventSummaries GetEventsForRangeResult
	 * @return EventSummaries
	 */
	public function setGetEventsForRangeResult($_GetEventsForRangeResult)
	{
		return ($this->GetEventsForRangeResult = $_GetEventsForRangeResult);
	}
	/**
	 * Get GetEventsForRangeResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForRangeResult()
	{
		return $this->GetEventsForRangeResult;
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