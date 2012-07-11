<?php
/**
 * Class file for XiEarningsCalendarTypeGetBoardMeetingResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetBoardMeetingResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetBoardMeetingResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetBoardMeetingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeBoardMeeting
	 */
	public $GetBoardMeetingResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeBoardMeeting GetBoardMeetingResult
	 * @return XiEarningsCalendarTypeGetBoardMeetingResponse
	 */
	public function __construct($_GetBoardMeetingResult = null)
	{
		parent::__construct(array('GetBoardMeetingResult'=>$_GetBoardMeetingResult));
	}
	/**
	 * Set GetBoardMeetingResult
	 * @param BoardMeeting GetBoardMeetingResult
	 * @return BoardMeeting
	 */
	public function setGetBoardMeetingResult($_GetBoardMeetingResult)
	{
		return ($this->GetBoardMeetingResult = $_GetBoardMeetingResult);
	}
	/**
	 * Get GetBoardMeetingResult
	 * @return XiEarningsCalendarTypeBoardMeeting
	 */
	public function getGetBoardMeetingResult()
	{
		return $this->GetBoardMeetingResult;
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