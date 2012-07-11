<?php
/**
 * Class file for OvhTypeDedicatedBasicInstallProgressStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBasicInstallProgressStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedBasicInstallProgressStruct extends OvhWsdlClass
{
	/**
	 * The step
	 * @var int
	 */
	public $step;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The time
	 * @var string
	 */
	public $time;
	/**
	 * The error
	 * @var string
	 */
	public $error;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor
	 * @param int step
	 * @param string comment
	 * @param string time
	 * @param string error
	 * @param string status
	 * @return OvhTypeDedicatedBasicInstallProgressStruct
	 */
	public function __construct($_step = null,$_comment = null,$_time = null,$_error = null,$_status = null)
	{
		parent::__construct(array('step'=>$_step,'comment'=>$_comment,'time'=>$_time,'error'=>$_error,'status'=>$_status));
	}
	/**
	 * Set step
	 * @param int step
	 * @return int
	 */
	public function setStep($_step)
	{
		return ($this->step = $_step);
	}
	/**
	 * Get step
	 * @return int
	 */
	public function getStep()
	{
		return $this->step;
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
	 * @param string time
	 * @return string
	 */
	public function setTime($_time)
	{
		return ($this->time = $_time);
	}
	/**
	 * Get time
	 * @return string
	 */
	public function getTime()
	{
		return $this->time;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>