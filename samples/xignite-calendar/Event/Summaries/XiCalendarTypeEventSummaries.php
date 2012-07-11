<?php
/**
 * Class file for XiCalendarTypeEventSummaries
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeEventSummaries
 * @date 08/07/2012
 */
class XiCalendarTypeEventSummaries extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The Summaries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeArrayOfEventSummary
	 */
	public $Summaries;
	/**
	 * Constructor
	 * @param XiCalendarTypeArrayOfEventSummary Summaries
	 * @return XiCalendarTypeEventSummaries
	 */
	public function __construct($_Summaries = null)
	{
		XiCalendarWsdlClass::__construct(array('Summaries'=>new XiCalendarTypeArrayOfEventSummary($_Summaries)));
	}
	/**
	 * Set Summaries
	 * @param ArrayOfEventSummary Summaries
	 * @return ArrayOfEventSummary
	 */
	public function setSummaries($_Summaries)
	{
		return ($this->Summaries = $_Summaries);
	}
	/**
	 * Get Summaries
	 * @return XiCalendarTypeArrayOfEventSummary
	 */
	public function getSummaries()
	{
		return $this->Summaries;
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