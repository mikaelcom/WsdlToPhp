<?php
/**
 * Class file for SPEmailWsTypeRequestResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeRequestResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeRequestResponse extends SPEmailWsWsdlClass
{
	/**
	 * The JobID
	 * @var int
	 */
	public $JobID;
	/**
	 * The Comment
	 * @var string
	 */
	public $Comment;
	/**
	 * The JobStatus
	 * @var RequestStatus
	 */
	public $JobStatus;
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * Constructor
	 * @param int JobID
	 * @param string Comment
	 * @param RequestStatus JobStatus
	 * @param string Alias
	 * @return SPEmailWsTypeRequestResponse
	 */
	public function __construct($_JobID = null,$_Comment = null,$_JobStatus = null,$_Alias = null)
	{
		parent::__construct(array('JobID'=>$_JobID,'Comment'=>$_Comment,'JobStatus'=>$_JobStatus,'Alias'=>$_Alias));
	}
	/**
	 * Set JobID
	 * @param int JobID
	 * @return int
	 */
	public function setJobID($_JobID)
	{
		return ($this->JobID = $_JobID);
	}
	/**
	 * Get JobID
	 * @return int
	 */
	public function getJobID()
	{
		return $this->JobID;
	}
	/**
	 * Set Comment
	 * @param string Comment
	 * @return string
	 */
	public function setComment($_Comment)
	{
		return ($this->Comment = $_Comment);
	}
	/**
	 * Get Comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->Comment;
	}
	/**
	 * Set JobStatus
	 * @param RequestStatus JobStatus
	 * @return RequestStatus
	 */
	public function setJobStatus($_JobStatus)
	{
		return ($this->JobStatus = $_JobStatus);
	}
	/**
	 * Get JobStatus
	 * @return RequestStatus
	 */
	public function getJobStatus()
	{
		return $this->JobStatus;
	}
	/**
	 * Set Alias
	 * @param string Alias
	 * @return string
	 */
	public function setAlias($_Alias)
	{
		return ($this->Alias = $_Alias);
	}
	/**
	 * Get Alias
	 * @return string
	 */
	public function getAlias()
	{
		return $this->Alias;
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