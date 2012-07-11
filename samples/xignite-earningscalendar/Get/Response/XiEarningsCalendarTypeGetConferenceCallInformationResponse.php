<?php
/**
 * Class file for XiEarningsCalendarTypeGetConferenceCallInformationResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetConferenceCallInformationResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetConferenceCallInformationResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetConferenceCallInformationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeConferenceCallInformation
	 */
	public $GetConferenceCallInformationResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeConferenceCallInformation GetConferenceCallInformationResult
	 * @return XiEarningsCalendarTypeGetConferenceCallInformationResponse
	 */
	public function __construct($_GetConferenceCallInformationResult = null)
	{
		parent::__construct(array('GetConferenceCallInformationResult'=>$_GetConferenceCallInformationResult));
	}
	/**
	 * Set GetConferenceCallInformationResult
	 * @param ConferenceCallInformation GetConferenceCallInformationResult
	 * @return ConferenceCallInformation
	 */
	public function setGetConferenceCallInformationResult($_GetConferenceCallInformationResult)
	{
		return ($this->GetConferenceCallInformationResult = $_GetConferenceCallInformationResult);
	}
	/**
	 * Get GetConferenceCallInformationResult
	 * @return XiEarningsCalendarTypeConferenceCallInformation
	 */
	public function getGetConferenceCallInformationResult()
	{
		return $this->GetConferenceCallInformationResult;
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