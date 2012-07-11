<?php
/**
 * Class file for OvhTypeDedicatedInstallConfigurationStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallConfigurationStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallConfigurationStruct extends OvhWsdlClass
{
	/**
	 * The pendingDate
	 * @var string
	 */
	public $pendingDate;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The stageId
	 * @var int
	 */
	public $stageId;
	/**
	 * The serverName
	 * @var string
	 */
	public $serverName;
	/**
	 * The parameters
	 * @var OvhTypeDedicatedInstallConfigurationParametersStruct
	 */
	public $parameters;
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
	 * The error
	 * @var string
	 */
	public $error;
	/**
	 * The action
	 * @var string
	 */
	public $action;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The doneDate
	 * @var string
	 */
	public $doneDate;
	/**
	 * Constructor
	 * @param string pendingDate
	 * @param string status
	 * @param int stageId
	 * @param string serverName
	 * @param OvhTypeDedicatedInstallConfigurationParametersStruct parameters
	 * @param string todoDate
	 * @param string doingDate
	 * @param string error
	 * @param string action
	 * @param int id
	 * @param string doneDate
	 * @return OvhTypeDedicatedInstallConfigurationStruct
	 */
	public function __construct($_pendingDate = null,$_status = null,$_stageId = null,$_serverName = null,$_parameters = null,$_todoDate = null,$_doingDate = null,$_error = null,$_action = null,$_id = null,$_doneDate = null)
	{
		parent::__construct(array('pendingDate'=>$_pendingDate,'status'=>$_status,'stageId'=>$_stageId,'serverName'=>$_serverName,'parameters'=>$_parameters,'todoDate'=>$_todoDate,'doingDate'=>$_doingDate,'error'=>$_error,'action'=>$_action,'id'=>$_id,'doneDate'=>$_doneDate));
	}
	/**
	 * Set pendingDate
	 * @param string pendingDate
	 * @return string
	 */
	public function setPendingDate($_pendingDate)
	{
		return ($this->pendingDate = $_pendingDate);
	}
	/**
	 * Get pendingDate
	 * @return string
	 */
	public function getPendingDate()
	{
		return $this->pendingDate;
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
	 * Set stageId
	 * @param int stageId
	 * @return int
	 */
	public function setStageId($_stageId)
	{
		return ($this->stageId = $_stageId);
	}
	/**
	 * Get stageId
	 * @return int
	 */
	public function getStageId()
	{
		return $this->stageId;
	}
	/**
	 * Set serverName
	 * @param string serverName
	 * @return string
	 */
	public function setServerName($_serverName)
	{
		return ($this->serverName = $_serverName);
	}
	/**
	 * Get serverName
	 * @return string
	 */
	public function getServerName()
	{
		return $this->serverName;
	}
	/**
	 * Set parameters
	 * @param dedicatedInstallConfigurationParametersStruct parameters
	 * @return dedicatedInstallConfigurationParametersStruct
	 */
	public function setParameters($_parameters)
	{
		return ($this->parameters = $_parameters);
	}
	/**
	 * Get parameters
	 * @return OvhTypededicatedInstallConfigurationParametersStruct
	 */
	public function getParameters()
	{
		return $this->parameters;
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
	 * Set action
	 * @param string action
	 * @return string
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
	}
	/**
	 * Get action
	 * @return string
	 */
	public function getAction()
	{
		return $this->action;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>