<?php
/**
 * Class file for XiCalendarTypeGetEventsForRangeLengthResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsForRangeLengthResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsForRangeLengthResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsForRangeLengthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsForRangeLengthResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsForRangeLengthResult
	 * @return XiCalendarTypeGetEventsForRangeLengthResponse
	 */
	public function __construct($_GetEventsForRangeLengthResult = null)
	{
		parent::__construct(array('GetEventsForRangeLengthResult'=>$_GetEventsForRangeLengthResult));
	}
	/**
	 * Set GetEventsForRangeLengthResult
	 * @param EventSummaries GetEventsForRangeLengthResult
	 * @return EventSummaries
	 */
	public function setGetEventsForRangeLengthResult($_GetEventsForRangeLengthResult)
	{
		return ($this->GetEventsForRangeLengthResult = $_GetEventsForRangeLengthResult);
	}
	/**
	 * Get GetEventsForRangeLengthResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsForRangeLengthResult()
	{
		return $this->GetEventsForRangeLengthResult;
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