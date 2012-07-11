<?php
/**
 * Class file for OvhTypeDedicatedBackupIncludeDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupIncludeDel
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupIncludeDel extends OvhWsdlClass
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
	 * The include
	 * @var string
	 */
	public $include;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string backupId
	 * @param string include
	 * @return OvhTypeDedicatedBackupIncludeDel
	 */
	public function __construct($_session = null,$_hostname = null,$_backupId = null,$_include = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'include'=>$_include));
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
	 * Set include
	 * @param string include
	 * @return string
	 */
	public function setInclude($_include)
	{
		return ($this->include = $_include);
	}
	/**
	 * Get include
	 * @return string
	 */
	public function getInclude()
	{
		return $this->include;
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