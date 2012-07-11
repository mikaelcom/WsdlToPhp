<?php
/**
 * Class file for XiCalendarTypeGetEventsByEventCodeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsByEventCodeResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsByEventCodeResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsByEventCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsByEventCodeResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsByEventCodeResult
	 * @return XiCalendarTypeGetEventsByEventCodeResponse
	 */
	public function __construct($_GetEventsByEventCodeResult = null)
	{
		parent::__construct(array('GetEventsByEventCodeResult'=>$_GetEventsByEventCodeResult));
	}
	/**
	 * Set GetEventsByEventCodeResult
	 * @param EventSummaries GetEventsByEventCodeResult
	 * @return EventSummaries
	 */
	public function setGetEventsByEventCodeResult($_GetEventsByEventCodeResult)
	{
		return ($this->GetEventsByEventCodeResult = $_GetEventsByEventCodeResult);
	}
	/**
	 * Get GetEventsByEventCodeResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsByEventCodeResult()
	{
		return $this->GetEventsByEventCodeResult;
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