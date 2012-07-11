<?php
/**
 * Class file for OvhTypeRpsMigrationGetProgressStatusStepStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsMigrationGetProgressStatusStepStruct
 * @date 02/07/2012
 */
class OvhTypeRpsMigrationGetProgressStatusStepStruct extends OvhWsdlClass
{
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The time
	 * @var int
	 */
	public $time;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The error
	 * @var string
	 */
	public $error;
	/**
	 * Constructor
	 * @param string comment
	 * @param int time
	 * @param string status
	 * @param string error
	 * @return OvhTypeRpsMigrationGetProgressStatusStepStruct
	 */
	public function __construct($_comment = null,$_time = null,$_status = null,$_error = null)
	{
		parent::__construct(array('comment'=>$_comment,'time'=>$_time,'status'=>$_status,'error'=>$_error));
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set time
	 * @param int time
	 * @return int
	 */
	public function setTime($_time)
	{
		return ($this->time = $_time);
	}
	/**
	 * Get time
	 * @return int
	 */
	public function getTime()
	{
		return $this->time;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set error
	 * @param string error
	 * @return string
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return string
	 */
	public function getError()
	{
		return $this->error;
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