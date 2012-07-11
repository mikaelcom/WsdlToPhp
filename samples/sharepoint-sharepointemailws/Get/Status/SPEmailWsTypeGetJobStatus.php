<?php
/**
 * Class file for SPEmailWsTypeGetJobStatus
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeGetJobStatus
 * @date 06/07/2012
 */
class SPEmailWsTypeGetJobStatus extends SPEmailWsWsdlClass
{
	/**
	 * The JobId
	 * @var int
	 */
	public $JobId;
	/**
	 * Constructor
	 * @param int JobId
	 * @return SPEmailWsTypeGetJobStatus
	 */
	public function __construct($_JobId = null)
	{
		parent::__construct(array('JobId'=>$_JobId));
	}
	/**
	 * Set JobId
	 * @param int JobId
	 * @return int
	 */
	public function setJobId($_JobId)
	{
		return ($this->JobId = $_JobId);
	}
	/**
	 * Get JobId
	 * @return int
	 */
	public function getJobId()
	{
		return $this->JobId;
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