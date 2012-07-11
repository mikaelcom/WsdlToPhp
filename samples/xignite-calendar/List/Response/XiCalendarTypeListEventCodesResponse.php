<?php
/**
 * Class file for XiCalendarTypeListEventCodesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeListEventCodesResponse
 * @date 08/07/2012
 */
class XiCalendarTypeListEventCodesResponse extends XiCalendarWsdlClass
{
	/**
	 * The ListEventCodesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventCodes
	 */
	public $ListEventCodesResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventCodes ListEventCodesResult
	 * @return XiCalendarTypeListEventCodesResponse
	 */
	public function __construct($_ListEventCodesResult = null)
	{
		parent::__construct(array('ListEventCodesResult'=>$_ListEventCodesResult));
	}
	/**
	 * Set ListEventCodesResult
	 * @param EventCodes ListEventCodesResult
	 * @return EventCodes
	 */
	public function setListEventCodesResult($_ListEventCodesResult)
	{
		return ($this->ListEventCodesResult = $_ListEventCodesResult);
	}
	/**
	 * Get ListEventCodesResult
	 * @return XiCalendarTypeEventCodes
	 */
	public function getListEventCodesResult()
	{
		return $this->ListEventCodesResult;
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