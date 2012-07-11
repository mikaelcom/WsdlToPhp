<?php
/**
 * Class file for OvhTypeDedicatedBackupExcludeDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupExcludeDel
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupExcludeDel extends OvhWsdlClass
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
	 * The exclude
	 * @var string
	 */
	public $exclude;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string backupId
	 * @param string exclude
	 * @return OvhTypeDedicatedBackupExcludeDel
	 */
	public function __construct($_session = null,$_hostname = null,$_backupId = null,$_exclude = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'exclude'=>$_exclude));
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
	 * Set exclude
	 * @param string exclude
	 * @return string
	 */
	public function setExclude($_exclude)
	{
		return ($this->exclude = $_exclude);
	}
	/**
	 * Get exclude
	 * @return string
	 */
	public function getExclude()
	{
		return $this->exclude;
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