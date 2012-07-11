<?php
/**
 * Class file for OvhTypeDedicatedBackupGetDate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupGetDate
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupGetDate extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string backupId
	 * @return OvhTypeDedicatedBackupGetDate
	 */
	public function __construct($_session = null,$_hostname = null,$_backupId = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>