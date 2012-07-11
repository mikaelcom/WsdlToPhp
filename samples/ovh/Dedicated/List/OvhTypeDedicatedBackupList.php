<?php
/**
 * Class file for OvhTypeDedicatedBackupList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupList
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupList extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The backupId
	 * @var string
	 */
	public $backupId;
	/**
	 * The backupName
	 * @var string
	 */
	public $backupName;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string backupId
	 * @param string backupName
	 * @return OvhTypeDedicatedBackupList
	 */
	public function __construct($_session = null,$_hostname = null,$_backupId = null,$_backupName = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'backupName'=>$_backupName));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set backupId
	 * @param string backupId
	 * @return string
	 */
	public function setBackupId($_backupId)
	{
		return ($this->backupId = $_backupId);
	}
	/**
	 * Get backupId
	 * @return string
	 */
	public function getBackupId()
	{
		return $this->backupId;
	}
	/**
	 * Set backupName
	 * @param string backupName
	 * @return string
	 */
	public function setBackupName($_backupName)
	{
		return ($this->backupName = $_backupName);
	}
	/**
	 * Get backupName
	 * @return string
	 */
	public function getBackupName()
	{
		return $this->backupName;
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