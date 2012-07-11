<?php
/**
 * Class file for XiCalendarTypeGetEventsByCountryCodeResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsByCountryCodeResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsByCountryCodeResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventsByCountryCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $GetEventsByCountryCodeResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries GetEventsByCountryCodeResult
	 * @return XiCalendarTypeGetEventsByCountryCodeResponse
	 */
	public function __construct($_GetEventsByCountryCodeResult = null)
	{
		parent::__construct(array('GetEventsByCountryCodeResult'=>$_GetEventsByCountryCodeResult));
	}
	/**
	 * Set GetEventsByCountryCodeResult
	 * @param EventSummaries GetEventsByCountryCodeResult
	 * @return EventSummaries
	 */
	public function setGetEventsByCountryCodeResult($_GetEventsByCountryCodeResult)
	{
		return ($this->GetEventsByCountryCodeResult = $_GetEventsByCountryCodeResult);
	}
	/**
	 * Get GetEventsByCountryCodeResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getGetEventsByCountryCodeResult()
	{
		return $this->GetEventsByCountryCodeResult;
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