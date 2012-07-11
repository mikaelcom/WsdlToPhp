<?php
/**
 * Class file for SPMeetingsTypeRestoreMeeting
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeRestoreMeeting
 * @date 06/07/2012
 */
class SPMeetingsTypeRestoreMeeting extends SPMeetingsWsdlClass
{
	/**
	 * The uid
	 * @var string
	 */
	public $uid;
	/**
	 * Constructor
	 * @param string uid
	 * @return SPMeetingsTypeRestoreMeeting
	 */
	public function __construct($_uid = null)
	{
		parent::__construct(array('uid'=>$_uid));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>