<?php
/**
 * Class file for XiCalendarTypeGetEventDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventDetailsResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventDetailsResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetEventDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeEventDetails
	 */
	public $GetEventDetailsResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeEventDetails GetEventDetailsResult
	 * @return XiCalendarTypeGetEventDetailsResponse
	 */
	public function __construct($_GetEventDetailsResult = null)
	{
		parent::__construct(array('GetEventDetailsResult'=>$_GetEventDetailsResult));
	}
	/**
	 * Set GetEventDetailsResult
	 * @param EventDetails GetEventDetailsResult
	 * @return EventDetails
	 */
	public function setGetEventDetailsResult($_GetEventDetailsResult)
	{
		return ($this->GetEventDetailsResult = $_GetEventDetailsResult);
	}
	/**
	 * Get GetEventDetailsResult
	 * @return XiCalendarTypeEventDetails
	 */
	public function getGetEventDetailsResult()
	{
		return $this->GetEventDetailsResult;
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