<?php
/**
 * Class file for XiCalendarTypeGetMostRecentEventsByEventCodeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetMostRecentEventsByEventCodeResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetMostRecentEventsByEventCodeResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetMostRecentEventsByEventCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetMostRecentEventsByEventCodeResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetMostRecentEventsByEventCodeResult
	 * @return XiCalendarTypeGetMostRecentEventsByEventCodeResponse
	 */
	public function __construct($_GetMostRecentEventsByEventCodeResult = null)
	{
		parent::__construct(array('GetMostRecentEventsByEventCodeResult'=>$_GetMostRecentEventsByEventCodeResult));
	}
	/**
	 * Set GetMostRecentEventsByEventCodeResult
	 * @param EventSummaries GetMostRecentEventsByEventCodeResult
	 * @return EventSummaries
	 */
	public function setGetMostRecentEventsByEventCodeResult($_GetMostRecentEventsByEventCodeResult)
	{
		return ($this->GetMostRecentEventsByEventCodeResult = $_GetMostRecentEventsByEventCodeResult);
	}
	/**
	 * Get GetMostRecentEventsByEventCodeResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetMostRecentEventsByEventCodeResult()
	{
		return $this->GetMostRecentEventsByEventCodeResult;
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