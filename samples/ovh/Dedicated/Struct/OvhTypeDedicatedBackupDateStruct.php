<?php
/**
 * Class file for OvhTypeDedicatedBackupDateStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupDateStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupDateStruct extends OvhWsdlClass
{
	/**
	 * The hour
	 * @var string
	 */
	public $hour;
	/**
	 * The superBackupName
	 * @var string
	 */
	public $superBackupName;
	/**
	 * The day
	 * @var string
	 */
	public $day;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The backupCount
	 * @var int
	 */
	public $backupCount;
	/**
	 * Constructor
	 * @param string hour
	 * @param string superBackupName
	 * @param string day
	 * @param int id
	 * @param int backupCount
	 * @return OvhTypeDedicatedBackupDateStruct
	 */
	public function __construct($_hour = null,$_superBackupName = null,$_day = null,$_id = null,$_backupCount = null)
	{
		parent::__construct(array('hour'=>$_hour,'superBackupName'=>$_superBackupName,'day'=>$_day,'id'=>$_id,'backupCount'=>$_backupCount));
	}
	/**
	 * Set hour
	 * @param string hour
	 * @return string
	 */
	public function setHour($_hour)
	{
		return ($this->hour = $_hour);
	}
	/**
	 * Get hour
	 * @return string
	 */
	public function getHour()
	{
		return $this->hour;
	}
	/**
	 * Set superBackupName
	 * @param string superBackupName
	 * @return string
	 */
	public function setSuperBackupName($_superBackupName)
	{
		return ($this->superBackupName = $_superBackupName);
	}
	/**
	 * Get superBackupName
	 * @return string
	 */
	public function getSuperBackupName()
	{
		return $this->superBackupName;
	}
	/**
	 * Set day
	 * @param string day
	 * @return string
	 */
	public function setDay($_day)
	{
		return ($this->day = $_day);
	}
	/**
	 * Get day
	 * @return string
	 */
	public function getDay()
	{
		return $this->day;
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
	 * Set backupCount
	 * @param int backupCount
	 * @return int
	 */
	public function setBackupCount($_backupCount)
	{
		return ($this->backupCount = $_backupCount);
	}
	/**
	 * Get backupCount
	 * @return int
	 */
	public function getBackupCount()
	{
		return $this->backupCount;
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