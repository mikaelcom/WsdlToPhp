<?php
/**
 * Class file for DirectSmileTypeDeleteJobByOrderID
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeDeleteJobByOrderID
 * @date 02/08/2012
 */
class DirectSmileTypeDeleteJobByOrderID extends DirectSmileWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The JobID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $JobID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string JobID
	 * @return DirectSmileTypeDeleteJobByOrderID
	 */
	public function __construct($_SessionID = null,$_JobID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'JobID'=>$_JobID));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set JobID
	 * @param string JobID
	 * @return string
	 */
	public function setJobID($_JobID)
	{
		return ($this->JobID = $_JobID);
	}
	/**
	 * Get JobID
	 * @return string
	 */
	public function getJobID()
	{
		return $this->JobID;
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