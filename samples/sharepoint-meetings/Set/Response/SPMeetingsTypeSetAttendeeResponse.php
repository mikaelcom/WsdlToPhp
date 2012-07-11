<?php
/**
 * Class file for SPMeetingsTypeSetAttendeeResponse
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeSetAttendeeResponse
 * @date 06/07/2012
 */
class SPMeetingsTypeSetAttendeeResponse extends SPMeetingsWsdlClass
{
	/**
	 * The attendeeEmail
	 * @var string
	 */
	public $attendeeEmail;
	/**
	 * The recurrenceId
	 * @var unsignedInt
	 */
	public $recurrenceId;
	/**
	 * The uid
	 * @var string
	 */
	public $uid;
	/**
	 * The sequence
	 * @var unsignedInt
	 */
	public $sequence;
	/**
	 * The utcDateTimeOrganizerCriticalChange
	 * @var dateTime
	 */
	public $utcDateTimeOrganizerCriticalChange;
	/**
	 * The utcDateTimeAttendeeCriticalChange
	 * @var dateTime
	 */
	public $utcDateTimeAttendeeCriticalChange;
	/**
	 * The response
	 * @var AttendeeResponse
	 */
	public $response;
	/**
	 * Constructor
	 * @param string attendeeEmail
	 * @param unsignedInt recurrenceId
	 * @param string uid
	 * @param unsignedInt sequence
	 * @param dateTime utcDateTimeOrganizerCriticalChange
	 * @param dateTime utcDateTimeAttendeeCriticalChange
	 * @param AttendeeResponse response
	 * @return SPMeetingsTypeSetAttendeeResponse
	 */
	public function __construct($_attendeeEmail = null,$_recurrenceId = null,$_uid = null,$_sequence = null,$_utcDateTimeOrganizerCriticalChange = null,$_utcDateTimeAttendeeCriticalChange = null,$_response = null)
	{
		parent::__construct(array('attendeeEmail'=>$_attendeeEmail,'recurrenceId'=>$_recurrenceId,'uid'=>$_uid,'sequence'=>$_sequence,'utcDateTimeOrganizerCriticalChange'=>$_utcDateTimeOrganizerCriticalChange,'utcDateTimeAttendeeCriticalChange'=>$_utcDateTimeAttendeeCriticalChange,'response'=>$_response));
	}
	/**
	 * Set attendeeEmail
	 * @param string attendeeEmail
	 * @return string
	 */
	public function setAttendeeEmail($_attendeeEmail)
	{
		return ($this->attendeeEmail = $_attendeeEmail);
	}
	/**
	 * Get attendeeEmail
	 * @return string
	 */
	public function getAttendeeEmail()
	{
		return $this->attendeeEmail;
	}
	/**
	 * Set recurrenceId
	 * @param unsignedInt recurrenceId
	 * @return unsignedInt
	 */
	public function setRecurrenceId($_recurrenceId)
	{
		return ($this->recurrenceId = $_recurrenceId);
	}
	/**
	 * Get recurrenceId
	 * @return unsignedInt
	 */
	public function getRecurrenceId()
	{
		return $this->recurrenceId;
	}
	/**
	 * Set uid
	 * @param string uid
	 * @return string
	 */
	public function setUid($_uid)
	{
		return ($this->uid = $_uid);
	}
	/**
	 * Get uid
	 * @return string
	 */
	public function getUid()
	{
		return $this->uid;
	}
	/**
	 * Set sequence
	 * @param unsignedInt sequence
	 * @return unsignedInt
	 */
	public function setSequence($_sequence)
	{
		return ($this->sequence = $_sequence);
	}
	/**
	 * Get sequence
	 * @return unsignedInt
	 */
	public function getSequence()
	{
		return $this->sequence;
	}
	/**
	 * Set utcDateTimeOrganizerCriticalChange
	 * @param dateTime utcDateTimeOrganizerCriticalChange
	 * @return dateTime
	 */
	public function setUtcDateTimeOrganizerCriticalChange($_utcDateTimeOrganizerCriticalChange)
	{
		return ($this->utcDateTimeOrganizerCriticalChange = $_utcDateTimeOrganizerCriticalChange);
	}
	/**
	 * Get utcDateTimeOrganizerCriticalChange
	 * @return dateTime
	 */
	public function getUtcDateTimeOrganizerCriticalChange()
	{
		return $this->utcDateTimeOrganizerCriticalChange;
	}
	/**
	 * Set utcDateTimeAttendeeCriticalChange
	 * @param dateTime utcDateTimeAttendeeCriticalChange
	 * @return dateTime
	 */
	public function setUtcDateTimeAttendeeCriticalChange($_utcDateTimeAttendeeCriticalChange)
	{
		return ($this->utcDateTimeAttendeeCriticalChange = $_utcDateTimeAttendeeCriticalChange);
	}
	/**
	 * Get utcDateTimeAttendeeCriticalChange
	 * @return dateTime
	 */
	public function getUtcDateTimeAttendeeCriticalChange()
	{
		return $this->utcDateTimeAttendeeCriticalChange;
	}
	/**
	 * Set response
	 * @param AttendeeResponse response
	 * @return AttendeeResponse
	 */
	public function setResponse($_response)
	{
		return ($this->response = $_response);
	}
	/**
	 * Get response
	 * @return AttendeeResponse
	 */
	public function getResponse()
	{
		return $this->response;
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