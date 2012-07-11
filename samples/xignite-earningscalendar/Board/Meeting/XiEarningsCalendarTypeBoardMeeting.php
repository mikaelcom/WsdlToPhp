<?php
/**
 * Class file for XiEarningsCalendarTypeBoardMeeting
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeBoardMeeting
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeBoardMeeting extends XiEarningsCalendarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeSecurity
	 */
	public $Security;
	/**
	 * The NextMeetingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NextMeetingDate;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSecurity Security
	 * @param string NextMeetingDate
	 * @return XiEarningsCalendarTypeBoardMeeting
	 */
	public function __construct($_Security = null,$_NextMeetingDate = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('Security'=>$_Security,'NextMeetingDate'=>$_NextMeetingDate));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiEarningsCalendarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set NextMeetingDate
	 * @param string NextMeetingDate
	 * @return string
	 */
	public function setNextMeetingDate($_NextMeetingDate)
	{
		return ($this->NextMeetingDate = $_NextMeetingDate);
	}
	/**
	 * Get NextMeetingDate
	 * @return string
	 */
	public function getNextMeetingDate()
	{
		return $this->NextMeetingDate;
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