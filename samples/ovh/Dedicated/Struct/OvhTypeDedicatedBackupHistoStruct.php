<?php
/**
 * Class file for OvhTypeDedicatedBackupHistoStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupHistoStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupHistoStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The backupId
	 * @var int
	 */
	public $backupId;
	/**
	 * The dateTime
	 * @var string
	 */
	public $dateTime;
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
	 * @param int id
	 * @param int backupId
	 * @param string dateTime
	 * @param string status
	 * @param string error
	 * @return OvhTypeDedicatedBackupHistoStruct
	 */
	public function __construct($_id = null,$_backupId = null,$_dateTime = null,$_status = null,$_error = null)
	{
		parent::__construct(array('id'=>$_id,'backupId'=>$_backupId,'dateTime'=>$_dateTime,'status'=>$_status,'error'=>$_error));
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
	 * Set backupId
	 * @param int backupId
	 * @return int
	 */
	public function setBackupId($_backupId)
	{
		return ($this->backupId = $_backupId);
	}
	/**
	 * Get backupId
	 * @return int
	 */
	public function getBackupId()
	{
		return $this->backupId;
	}
	/**
	 * Set dateTime
	 * @param string dateTime
	 * @return string
	 */
	public function setDateTime($_dateTime)
	{
		return ($this->dateTime = $_dateTime);
	}
	/**
	 * Get dateTime
	 * @return string
	 */
	public function getDateTime()
	{
		return $this->dateTime;
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