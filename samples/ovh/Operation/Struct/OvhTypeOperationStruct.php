<?php
/**
 * Class file for OvhTypeOperationStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOperationStruct
 * @date 02/07/2012
 */
class OvhTypeOperationStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The internalStatus
	 * @var string
	 */
	public $internalStatus;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The users
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $users;
	/**
	 * The retry
	 * @var int
	 */
	public $retry;
	/**
	 * The todoDate
	 * @var string
	 */
	public $todoDate;
	/**
	 * The lastUpdate
	 * @var string
	 */
	public $lastUpdate;
	/**
	 * The doneDate
	 * @var string
	 */
	public $doneDate;
	/**
	 * The canCancel
	 * @var boolean
	 */
	public $canCancel;
	/**
	 * The canCorrect
	 * @var boolean
	 */
	public $canCorrect;
	/**
	 * The canRelaunch
	 * @var boolean
	 */
	public $canRelaunch;
	/**
	 * The restartStep
	 * @var string
	 */
	public $restartStep;
	/**
	 * Constructor
	 * @param int id
	 * @param string domain
	 * @param string function
	 * @param string status
	 * @param string internalStatus
	 * @param string comment
	 * @param OvhTypeMyArrayOfStringType users
	 * @param int retry
	 * @param string todoDate
	 * @param string lastUpdate
	 * @param string doneDate
	 * @param boolean canCancel
	 * @param boolean canCorrect
	 * @param boolean canRelaunch
	 * @param string restartStep
	 * @return OvhTypeOperationStruct
	 */
	public function __construct($_id = null,$_domain = null,$_function = null,$_status = null,$_internalStatus = null,$_comment = null,$_users = null,$_retry = null,$_todoDate = null,$_lastUpdate = null,$_doneDate = null,$_canCancel = null,$_canCorrect = null,$_canRelaunch = null,$_restartStep = null)
	{
		parent::__construct(array('id'=>$_id,'domain'=>$_domain,'function'=>$_function,'status'=>$_status,'internalStatus'=>$_internalStatus,'comment'=>$_comment,'users'=>new OvhTypeMyArrayOfStringType($_users),'retry'=>$_retry,'todoDate'=>$_todoDate,'lastUpdate'=>$_lastUpdate,'doneDate'=>$_doneDate,'canCancel'=>$_canCancel,'canCorrect'=>$_canCorrect,'canRelaunch'=>$_canRelaunch,'restartStep'=>$_restartStep));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set function
	 * @param string function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get function
	 * @return string
	 */
	public function getFunction()
	{
		return $this->function;
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
	 * Set internalStatus
	 * @param string internalStatus
	 * @return string
	 */
	public function setInternalStatus($_internalStatus)
	{
		return ($this->internalStatus = $_internalStatus);
	}
	/**
	 * Get internalStatus
	 * @return string
	 */
	public function getInternalStatus()
	{
		return $this->internalStatus;
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
	 * Set users
	 * @param MyArrayOfStringType users
	 * @return MyArrayOfStringType
	 */
	public function setUsers($_users)
	{
		return ($this->users = $_users);
	}
	/**
	 * Get users
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getUsers()
	{
		return $this->users;
	}
	/**
	 * Set retry
	 * @param int retry
	 * @return int
	 */
	public function setRetry($_retry)
	{
		return ($this->retry = $_retry);
	}
	/**
	 * Get retry
	 * @return int
	 */
	public function getRetry()
	{
		return $this->retry;
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
	 * Set lastUpdate
	 * @param string lastUpdate
	 * @return string
	 */
	public function setLastUpdate($_lastUpdate)
	{
		return ($this->lastUpdate = $_lastUpdate);
	}
	/**
	 * Get lastUpdate
	 * @return string
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
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
	 * Set canCancel
	 * @param boolean canCancel
	 * @return boolean
	 */
	public function setCanCancel($_canCancel)
	{
		return ($this->canCancel = $_canCancel);
	}
	/**
	 * Get canCancel
	 * @return boolean
	 */
	public function getCanCancel()
	{
		return $this->canCancel;
	}
	/**
	 * Set canCorrect
	 * @param boolean canCorrect
	 * @return boolean
	 */
	public function setCanCorrect($_canCorrect)
	{
		return ($this->canCorrect = $_canCorrect);
	}
	/**
	 * Get canCorrect
	 * @return boolean
	 */
	public function getCanCorrect()
	{
		return $this->canCorrect;
	}
	/**
	 * Set canRelaunch
	 * @param boolean canRelaunch
	 * @return boolean
	 */
	public function setCanRelaunch($_canRelaunch)
	{
		return ($this->canRelaunch = $_canRelaunch);
	}
	/**
	 * Get canRelaunch
	 * @return boolean
	 */
	public function getCanRelaunch()
	{
		return $this->canRelaunch;
	}
	/**
	 * Set restartStep
	 * @param string restartStep
	 * @return string
	 */
	public function setRestartStep($_restartStep)
	{
		return ($this->restartStep = $_restartStep);
	}
	/**
	 * Get restartStep
	 * @return string
	 */
	public function getRestartStep()
	{
		return $this->restartStep;
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