<?php
/**
 * Class file for SPMeetingsTypeAddMeetingFromICal
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeAddMeetingFromICal
 * @date 06/07/2012
 */
class SPMeetingsTypeAddMeetingFromICal extends SPMeetingsWsdlClass
{
	/**
	 * The organizerEmail
	 * @var string
	 */
	public $organizerEmail;
	/**
	 * The icalText
	 * @var string
	 */
	public $icalText;
	/**
	 * Constructor
	 * @param string organizerEmail
	 * @param string icalText
	 * @return SPMeetingsTypeAddMeetingFromICal
	 */
	public function __construct($_organizerEmail = null,$_icalText = null)
	{
		parent::__construct(array('organizerEmail'=>$_organizerEmail,'icalText'=>$_icalText));
	}
	/**
	 * Set organizerEmail
	 * @param string organizerEmail
	 * @return string
	 */
	public function setOrganizerEmail($_organizerEmail)
	{
		return ($this->organizerEmail = $_organizerEmail);
	}
	/**
	 * Get organizerEmail
	 * @return string
	 */
	public function getOrganizerEmail()
	{
		return $this->organizerEmail;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>