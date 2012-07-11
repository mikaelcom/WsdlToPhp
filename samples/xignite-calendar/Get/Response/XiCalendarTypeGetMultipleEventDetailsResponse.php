<?php
/**
 * Class file for XiCalendarTypeGetMultipleEventDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetMultipleEventDetailsResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetMultipleEventDetailsResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetMultipleEventDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeMultipleEventDetails
	 */
	public $GetMultipleEventDetailsResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeMultipleEventDetails GetMultipleEventDetailsResult
	 * @return XiCalendarTypeGetMultipleEventDetailsResponse
	 */
	public function __construct($_GetMultipleEventDetailsResult = null)
	{
		parent::__construct(array('GetMultipleEventDetailsResult'=>$_GetMultipleEventDetailsResult));
	}
	/**
	 * Set GetMultipleEventDetailsResult
	 * @param MultipleEventDetails GetMultipleEventDetailsResult
	 * @return MultipleEventDetails
	 */
	public function setGetMultipleEventDetailsResult($_GetMultipleEventDetailsResult)
	{
		return ($this->GetMultipleEventDetailsResult = $_GetMultipleEventDetailsResult);
	}
	/**
	 * Get GetMultipleEventDetailsResult
	 * @return XiCalendarTypeMultipleEventDetails
	 */
	public function getGetMultipleEventDetailsResult()
	{
		return $this->GetMultipleEventDetailsResult;
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