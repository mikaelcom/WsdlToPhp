<?php
/**
 * Class file for XiCalendarTypeGetEventsByEventNameResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsByEventNameResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsByEventNameResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsByEventNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsByEventNameResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsByEventNameResult
	 * @return XiCalendarTypeGetEventsByEventNameResponse
	 */
	public function __construct($_GetEventsByEventNameResult = null)
	{
		parent::__construct(array('GetEventsByEventNameResult'=>$_GetEventsByEventNameResult));
	}
	/**
	 * Set GetEventsByEventNameResult
	 * @param EventSummaries GetEventsByEventNameResult
	 * @return EventSummaries
	 */
	public function setGetEventsByEventNameResult($_GetEventsByEventNameResult)
	{
		return ($this->GetEventsByEventNameResult = $_GetEventsByEventNameResult);
	}
	/**
	 * Get GetEventsByEventNameResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsByEventNameResult()
	{
		return $this->GetEventsByEventNameResult;
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