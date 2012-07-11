<?php
/**
 * Class file for XiCalendarTypeSearchEventsResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeSearchEventsResponse
 * @date 08/07/2012
 */
class XiCalendarTypeSearchEventsResponse extends XiCalendarWsdlClass
{
	/**
	 * The SearchEventsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventSummaries
	 */
	public $SearchEventsResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventSummaries SearchEventsResult
	 * @return XiCalendarTypeSearchEventsResponse
	 */
	public function __construct($_SearchEventsResult = null)
	{
		parent::__construct(array('SearchEventsResult'=>$_SearchEventsResult));
	}
	/**
	 * Set SearchEventsResult
	 * @param EventSummaries SearchEventsResult
	 * @return EventSummaries
	 */
	public function setSearchEventsResult($_SearchEventsResult)
	{
		return ($this->SearchEventsResult = $_SearchEventsResult);
	}
	/**
	 * Get SearchEventsResult
	 * @return XiCalendarTypeEventSummaries
	 */
	public function getSearchEventsResult()
	{
		return $this->SearchEventsResult;
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