<?php
/**
 * Class file for EbayTradingTypeMarkUpMarkDownHistoryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMarkUpMarkDownHistoryType
 * Documentation : List of objects representing markup or markdown events for a given application and time period. If no time period is specified in the request, the information for only one day (24 hours before the time the call is made to the time the call is made) is included. The maximum time period is allowed is 3 days (72 hours before the call is made to the time the call is made).
 * @date 04/07/2012
 */
class EbayTradingTypeMarkUpMarkDownHistoryType extends EbayTradingWsdlClass
{
	/**
	 * The MarkUpMarkDownEvent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details for a MarkDown or MarkUp event.
	 * @var EbayTradingTypeMarkUpMarkDownEventType
	 */
	public $MarkUpMarkDownEvent;
	/**
	 * Constructor
	 * @param EbayTradingTypeMarkUpMarkDownEventType MarkUpMarkDownEvent
	 * @return EbayTradingTypeMarkUpMarkDownHistoryType
	 */
	public function __construct($_MarkUpMarkDownEvent = null)
	{
		parent::__construct(array('MarkUpMarkDownEvent'=>$_MarkUpMarkDownEvent));
	}
	/**
	 * Set MarkUpMarkDownEvent
	 * @param MarkUpMarkDownEventType MarkUpMarkDownEvent
	 * @return MarkUpMarkDownEventType
	 */
	public function setMarkUpMarkDownEvent($_MarkUpMarkDownEvent)
	{
		return ($this->MarkUpMarkDownEvent = $_MarkUpMarkDownEvent);
	}
	/**
	 * Get MarkUpMarkDownEvent
	 * @return EbayTradingTypeMarkUpMarkDownEventType
	 */
	public function getMarkUpMarkDownEvent()
	{
		return $this->MarkUpMarkDownEvent;
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