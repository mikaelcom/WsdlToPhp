<?php
/**
 * Class file for XiCalendarTypeGetLatestUpdateTimeStampResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetLatestUpdateTimeStampResponse
 * @date 08/07/2012
 */
class XiCalendarTypeGetLatestUpdateTimeStampResponse extends XiCalendarWsdlClass
{
	/**
	 * The GetLatestUpdateTimeStampResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeTimeValue
	 */
	public $GetLatestUpdateTimeStampResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeTimeValue GetLatestUpdateTimeStampResult
	 * @return XiCalendarTypeGetLatestUpdateTimeStampResponse
	 */
	public function __construct($_GetLatestUpdateTimeStampResult = null)
	{
		parent::__construct(array('GetLatestUpdateTimeStampResult'=>$_GetLatestUpdateTimeStampResult));
	}
	/**
	 * Set GetLatestUpdateTimeStampResult
	 * @param TimeValue GetLatestUpdateTimeStampResult
	 * @return TimeValue
	 */
	public function setGetLatestUpdateTimeStampResult($_GetLatestUpdateTimeStampResult)
	{
		return ($this->GetLatestUpdateTimeStampResult = $_GetLatestUpdateTimeStampResult);
	}
	/**
	 * Get GetLatestUpdateTimeStampResult
	 * @return XiCalendarTypeTimeValue
	 */
	public function getGetLatestUpdateTimeStampResult()
	{
		return $this->GetLatestUpdateTimeStampResult;
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