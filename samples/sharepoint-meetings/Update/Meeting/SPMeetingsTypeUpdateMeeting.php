<?php
/**
 * Class file for SPMeetingsTypeUpdateMeeting
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeUpdateMeeting
 * @date 06/07/2012
 */
class SPMeetingsTypeUpdateMeeting extends SPMeetingsWsdlClass
{
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
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * The location
	 * @var string
	 */
	public $location;
	/**
	 * The utcDateStart
	 * @var dateTime
	 */
	public $utcDateStart;
	/**
	 * The utcDateEnd
	 * @var dateTime
	 */
	public $utcDateEnd;
	/**
	 * The nonGregorian
	 * @var boolean
	 */
	public $nonGregorian;
	/**
	 * Constructor
	 * @param string uid
	 * @param unsignedInt sequence
	 * @param dateTime utcDateStamp
	 * @param string title
	 * @param string location
	 * @param dateTime utcDateStart
	 * @param dateTime utcDateEnd
	 * @param boolean nonGregorian
	 * @return SPMeetingsTypeUpdateMeeting
	 */
	public function __construct($_uid = null,$_sequence = null,$_utcDateStamp = null,$_title = null,$_location = null,$_utcDateStart = null,$_utcDateEnd = null,$_nonGregorian = null)
	{
		parent::__construct(array('uid'=>$_uid,'sequence'=>$_sequence,'utcDateStamp'=>$_utcDateStamp,'title'=>$_title,'location'=>$_location,'utcDateStart'=>$_utcDateStart,'utcDateEnd'=>$_utcDateEnd,'nonGregorian'=>$_nonGregorian));
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
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set location
	 * @param string location
	 * @return string
	 */
	public function setLocation($_location)
	{
		return ($this->location = $_location);
	}
	/**
	 * Get location
	 * @return string
	 */
	public function getLocation()
	{
		return $this->location;
	}
	/**
	 * Set utcDateStart
	 * @param dateTime utcDateStart
	 * @return dateTime
	 */
	public function setUtcDateStart($_utcDateStart)
	{
		return ($this->utcDateStart = $_utcDateStart);
	}
	/**
	 * Get utcDateStart
	 * @return dateTime
	 */
	public function getUtcDateStart()
	{
		return $this->utcDateStart;
	}
	/**
	 * Set utcDateEnd
	 * @param dateTime utcDateEnd
	 * @return dateTime
	 */
	public function setUtcDateEnd($_utcDateEnd)
	{
		return ($this->utcDateEnd = $_utcDateEnd);
	}
	/**
	 * Get utcDateEnd
	 * @return dateTime
	 */
	public function getUtcDateEnd()
	{
		return $this->utcDateEnd;
	}
	/**
	 * Set nonGregorian
	 * @param boolean nonGregorian
	 * @return boolean
	 */
	public function setNonGregorian($_nonGregorian)
	{
		return ($this->nonGregorian = $_nonGregorian);
	}
	/**
	 * Get nonGregorian
	 * @return boolean
	 */
	public function getNonGregorian()
	{
		return $this->nonGregorian;
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