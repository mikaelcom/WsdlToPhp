<?php
/**
 * Class file for SPMeetingsTypeUpdateMeetingFromICal
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeUpdateMeetingFromICal
 * @date 06/07/2012
 */
class SPMeetingsTypeUpdateMeetingFromICal extends SPMeetingsWsdlClass
{
	/**
	 * The icalText
	 * @var string
	 */
	public $icalText;
	/**
	 * The ignoreAttendees
	 * @var boolean
	 */
	public $ignoreAttendees;
	/**
	 * Constructor
	 * @param string icalText
	 * @param boolean ignoreAttendees
	 * @return SPMeetingsTypeUpdateMeetingFromICal
	 */
	public function __construct($_icalText = null,$_ignoreAttendees = null)
	{
		parent::__construct(array('icalText'=>$_icalText,'ignoreAttendees'=>$_ignoreAttendees));
	}
	/**
	 * Set icalText
	 * @param string icalText
	 * @return string
	 */
	public function setIcalText($_icalText)
	{
		return ($this->icalText = $_icalText);
	}
	/**
	 * Get icalText
	 * @return string
	 */
	public function getIcalText()
	{
		return $this->icalText;
	}
	/**
	 * Set ignoreAttendees
	 * @param boolean ignoreAttendees
	 * @return boolean
	 */
	public function setIgnoreAttendees($_ignoreAttendees)
	{
		return ($this->ignoreAttendees = $_ignoreAttendees);
	}
	/**
	 * Get ignoreAttendees
	 * @return boolean
	 */
	public function getIgnoreAttendees()
	{
		return $this->ignoreAttendees;
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