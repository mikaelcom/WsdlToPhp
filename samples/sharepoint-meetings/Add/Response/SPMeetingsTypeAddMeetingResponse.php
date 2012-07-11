<?php
/**
 * Class file for SPMeetingsTypeAddMeetingResponse
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeAddMeetingResponse
 * @date 06/07/2012
 */
class SPMeetingsTypeAddMeetingResponse extends SPMeetingsWsdlClass
{
	/**
	 * The AddMeetingResult
	 * @var SPMeetingsTypeAddMeetingResult
	 */
	public $AddMeetingResult;
	/**
	 * Constructor
	 * @param SPMeetingsTypeAddMeetingResult AddMeetingResult
	 * @return SPMeetingsTypeAddMeetingResponse
	 */
	public function __construct($_AddMeetingResult = null)
	{
		parent::__construct(array('AddMeetingResult'=>$_AddMeetingResult));
	}
	/**
	 * Set AddMeetingResult
	 * @param AddMeetingResult AddMeetingResult
	 * @return AddMeetingResult
	 */
	public function setAddMeetingResult($_AddMeetingResult)
	{
		return ($this->AddMeetingResult = $_AddMeetingResult);
	}
	/**
	 * Get AddMeetingResult
	 * @return SPMeetingsTypeAddMeetingResult
	 */
	public function getAddMeetingResult()
	{
		return $this->AddMeetingResult;
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