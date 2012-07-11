<?php
/**
 * Class file for SPMeetingsTypeUpdateMeetingFromICalResponse
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeUpdateMeetingFromICalResponse
 * @date 06/07/2012
 */
class SPMeetingsTypeUpdateMeetingFromICalResponse extends SPMeetingsWsdlClass
{
	/**
	 * The UpdateMeetingFromICalResult
	 * @var SPMeetingsTypeUpdateMeetingFromICalResult
	 */
	public $UpdateMeetingFromICalResult;
	/**
	 * Constructor
	 * @param SPMeetingsTypeUpdateMeetingFromICalResult UpdateMeetingFromICalResult
	 * @return SPMeetingsTypeUpdateMeetingFromICalResponse
	 */
	public function __construct($_UpdateMeetingFromICalResult = null)
	{
		parent::__construct(array('UpdateMeetingFromICalResult'=>$_UpdateMeetingFromICalResult));
	}
	/**
	 * Set UpdateMeetingFromICalResult
	 * @param UpdateMeetingFromICalResult UpdateMeetingFromICalResult
	 * @return UpdateMeetingFromICalResult
	 */
	public function setUpdateMeetingFromICalResult($_UpdateMeetingFromICalResult)
	{
		return ($this->UpdateMeetingFromICalResult = $_UpdateMeetingFromICalResult);
	}
	/**
	 * Get UpdateMeetingFromICalResult
	 * @return SPMeetingsTypeUpdateMeetingFromICalResult
	 */
	public function getUpdateMeetingFromICalResult()
	{
		return $this->UpdateMeetingFromICalResult;
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