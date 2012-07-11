<?php
/**
 * Class file for SPMeetingsTypeRemoveMeeting
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeRemoveMeeting
 * @date 06/07/2012
 */
class SPMeetingsTypeRemoveMeeting extends SPMeetingsWsdlClass
{
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
	 * The utcDateStamp
	 * @var dateTime
	 */
	public $utcDateStamp;
	/**
	 * The cancelMeeting
	 * @var boolean
	 */
	public $cancelMeeting;
	/**
	 * Constructor
	 * @param unsignedInt recurrenceId
	 * @param string uid
	 * @param unsignedInt sequence
	 * @param dateTime utcDateStamp
	 * @param boolean cancelMeeting
	 * @return SPMeetingsTypeRemoveMeeting
	 */
	public function __construct($_recurrenceId = null,$_uid = null,$_sequence = null,$_utcDateStamp = null,$_cancelMeeting = null)
	{
		parent::__construct(array('recurrenceId'=>$_recurrenceId,'uid'=>$_uid,'sequence'=>$_sequence,'utcDateStamp'=>$_utcDateStamp,'cancelMeeting'=>$_cancelMeeting));
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
	 * Set utcDateStamp
	 * @param dateTime utcDateStamp
	 * @return dateTime
	 */
	public function setUtcDateStamp($_utcDateStamp)
	{
		return ($this->utcDateStamp = $_utcDateStamp);
	}
	/**
	 * Get utcDateStamp
	 * @return dateTime
	 */
	public function getUtcDateStamp()
	{
		return $this->utcDateStamp;
	}
	/**
	 * Set cancelMeeting
	 * @param boolean cancelMeeting
	 * @return boolean
	 */
	public function setCancelMeeting($_cancelMeeting)
	{
		return ($this->cancelMeeting = $_cancelMeeting);
	}
	/**
	 * Get cancelMeeting
	 * @return boolean
	 */
	public function getCancelMeeting()
	{
		return $this->cancelMeeting;
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