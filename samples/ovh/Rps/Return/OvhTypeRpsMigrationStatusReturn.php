<?php
/**
 * Class file for OvhTypeRpsMigrationStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsMigrationStatusReturn
 * @date 02/07/2012
 */
class OvhTypeRpsMigrationStatusReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The progressStatus
	 * @var int
	 */
	public $progressStatus;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The logicalRpsName
	 * @var string
	 */
	public $logicalRpsName;
	/**
	 * The physicalRpsTo
	 * @var string
	 */
	public $physicalRpsTo;
	/**
	 * The todoDate
	 * @var string
	 */
	public $todoDate;
	/**
	 * The doingDate
	 * @var string
	 */
	public $doingDate;
	/**
	 * The doneDate
	 * @var string
	 */
	public $doneDate;
	/**
	 * The errorMessage
	 * @var string
	 */
	public $errorMessage;
	/**
	 * Constructor
	 * @param int id
	 * @param int progressStatus
	 * @param string status
	 * @param string logicalRpsName
	 * @param string physicalRpsTo
	 * @param string todoDate
	 * @param string doingDate
	 * @param string doneDate
	 * @param string errorMessage
	 * @return OvhTypeRpsMigrationStatusReturn
	 */
	public function __construct($_id = null,$_progressStatus = null,$_status = null,$_logicalRpsName = null,$_physicalRpsTo = null,$_todoDate = null,$_doingDate = null,$_doneDate = null,$_errorMessage = null)
	{
		parent::__construct(array('id'=>$_id,'progressStatus'=>$_progressStatus,'status'=>$_status,'logicalRpsName'=>$_logicalRpsName,'physicalRpsTo'=>$_physicalRpsTo,'todoDate'=>$_todoDate,'doingDate'=>$_doingDate,'doneDate'=>$_doneDate,'errorMessage'=>$_errorMessage));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set progressStatus
	 * @param int progressStatus
	 * @return int
	 */
	public function setProgressStatus($_progressStatus)
	{
		return ($this->progressStatus = $_progressStatus);
	}
	/**
	 * Get progressStatus
	 * @return int
	 */
	public function getProgressStatus()
	{
		return $this->progressStatus;
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
	 * Set logicalRpsName
	 * @param string logicalRpsName
	 * @return string
	 */
	public function setLogicalRpsName($_logicalRpsName)
	{
		return ($this->logicalRpsName = $_logicalRpsName);
	}
	/**
	 * Get logicalRpsName
	 * @return string
	 */
	public function getLogicalRpsName()
	{
		return $this->logicalRpsName;
	}
	/**
	 * Set physicalRpsTo
	 * @param string physicalRpsTo
	 * @return string
	 */
	public function setPhysicalRpsTo($_physicalRpsTo)
	{
		return ($this->physicalRpsTo = $_physicalRpsTo);
	}
	/**
	 * Get physicalRpsTo
	 * @return string
	 */
	public function getPhysicalRpsTo()
	{
		return $this->physicalRpsTo;
	}
	/**
	 * Set todoDate
	 * @param string todoDate
	 * @return string
	 */
	public function setTodoDate($_todoDate)
	{
		return ($this->todoDate = $_todoDate);
	}
	/**
	 * Get todoDate
	 * @return string
	 */
	public function getTodoDate()
	{
		return $this->todoDate;
	}
	/**
	 * Set doingDate
	 * @param string doingDate
	 * @return string
	 */
	public function setDoingDate($_doingDate)
	{
		return ($this->doingDate = $_doingDate);
	}
	/**
	 * Get doingDate
	 * @return string
	 */
	public function getDoingDate()
	{
		return $this->doingDate;
	}
	/**
	 * Set doneDate
	 * @param string doneDate
	 * @return string
	 */
	public function setDoneDate($_doneDate)
	{
		return ($this->doneDate = $_doneDate);
	}
	/**
	 * Get doneDate
	 * @return string
	 */
	public function getDoneDate()
	{
		return $this->doneDate;
	}
	/**
	 * Set errorMessage
	 * @param string errorMessage
	 * @return string
	 */
	public function setErrorMessage($_errorMessage)
	{
		return ($this->errorMessage = $_errorMessage);
	}
	/**
	 * Get errorMessage
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
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