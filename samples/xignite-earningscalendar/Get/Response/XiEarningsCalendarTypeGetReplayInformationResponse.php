<?php
/**
 * Class file for XiEarningsCalendarTypeGetReplayInformationResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetReplayInformationResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetReplayInformationResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetReplayInformationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeReplayInformation
	 */
	public $GetReplayInformationResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeReplayInformation GetReplayInformationResult
	 * @return XiEarningsCalendarTypeGetReplayInformationResponse
	 */
	public function __construct($_GetReplayInformationResult = null)
	{
		parent::__construct(array('GetReplayInformationResult'=>$_GetReplayInformationResult));
	}
	/**
	 * Set GetReplayInformationResult
	 * @param ReplayInformation GetReplayInformationResult
	 * @return ReplayInformation
	 */
	public function setGetReplayInformationResult($_GetReplayInformationResult)
	{
		return ($this->GetReplayInformationResult = $_GetReplayInformationResult);
	}
	/**
	 * Get GetReplayInformationResult
	 * @return XiEarningsCalendarTypeReplayInformation
	 */
	public function getGetReplayInformationResult()
	{
		return $this->GetReplayInformationResult;
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