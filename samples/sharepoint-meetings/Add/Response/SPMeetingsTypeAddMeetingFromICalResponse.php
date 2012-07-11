<?php
/**
 * Class file for SPMeetingsTypeAddMeetingFromICalResponse
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeAddMeetingFromICalResponse
 * @date 06/07/2012
 */
class SPMeetingsTypeAddMeetingFromICalResponse extends SPMeetingsWsdlClass
{
	/**
	 * The AddMeetingFromICalResult
	 * @var SPMeetingsTypeAddMeetingFromICalResult
	 */
	public $AddMeetingFromICalResult;
	/**
	 * Constructor
	 * @param SPMeetingsTypeAddMeetingFromICalResult AddMeetingFromICalResult
	 * @return SPMeetingsTypeAddMeetingFromICalResponse
	 */
	public function __construct($_AddMeetingFromICalResult = null)
	{
		parent::__construct(array('AddMeetingFromICalResult'=>$_AddMeetingFromICalResult));
	}
	/**
	 * Set AddMeetingFromICalResult
	 * @param AddMeetingFromICalResult AddMeetingFromICalResult
	 * @return AddMeetingFromICalResult
	 */
	public function setAddMeetingFromICalResult($_AddMeetingFromICalResult)
	{
		return ($this->AddMeetingFromICalResult = $_AddMeetingFromICalResult);
	}
	/**
	 * Get AddMeetingFromICalResult
	 * @return SPMeetingsTypeAddMeetingFromICalResult
	 */
	public function getAddMeetingFromICalResult()
	{
		return $this->AddMeetingFromICalResult;
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