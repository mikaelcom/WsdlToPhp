<?php
/**
 * Class file for XiFuturesTypeGetTerminationScheduleResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTerminationScheduleResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetTerminationScheduleResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetTerminationScheduleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeTerminationSchedule
	 */
	public $GetTerminationScheduleResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeTerminationSchedule GetTerminationScheduleResult
	 * @return XiFuturesTypeGetTerminationScheduleResponse
	 */
	public function __construct($_GetTerminationScheduleResult = null)
	{
		parent::__construct(array('GetTerminationScheduleResult'=>$_GetTerminationScheduleResult));
	}
	/**
	 * Set GetTerminationScheduleResult
	 * @param TerminationSchedule GetTerminationScheduleResult
	 * @return TerminationSchedule
	 */
	public function setGetTerminationScheduleResult($_GetTerminationScheduleResult)
	{
		return ($this->GetTerminationScheduleResult = $_GetTerminationScheduleResult);
	}
	/**
	 * Get GetTerminationScheduleResult
	 * @return XiFuturesTypeTerminationSchedule
	 */
	public function getGetTerminationScheduleResult()
	{
		return $this->GetTerminationScheduleResult;
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