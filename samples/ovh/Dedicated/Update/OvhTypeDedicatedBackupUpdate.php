<?php
/**
 * Class file for OvhTypeDedicatedBackupUpdate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupUpdate
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupUpdate extends OvhWsdlClass
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
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The snapshot
	 * @var int
	 */
	public $snapshot;
	/**
	 * The sshPort
	 * @var int
	 */
	public $sshPort;
	/**
	 * The status
	 * @var int
	 */
	public $status;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The src
	 * @var string
	 */
	public $src;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string backupId
	 * @param string email
	 * @param int snapshot
	 * @param int sshPort
	 * @param int status
	 * @param string language
	 * @param string src
	 * @return OvhTypeDedicatedBackupUpdate
	 */
	public function __construct($_session = null,$_hostname = null,$_backupId = null,$_email = null,$_snapshot = null,$_sshPort = null,$_status = null,$_language = null,$_src = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'email'=>$_email,'snapshot'=>$_snapshot,'sshPort'=>$_sshPort,'status'=>$_status,'language'=>$_language,'src'=>$_src));
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
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set snapshot
	 * @param int snapshot
	 * @return int
	 */
	public function setSnapshot($_snapshot)
	{
		return ($this->snapshot = $_snapshot);
	}
	/**
	 * Get snapshot
	 * @return int
	 */
	public function getSnapshot()
	{
		return $this->snapshot;
	}
	/**
	 * Set sshPort
	 * @param int sshPort
	 * @return int
	 */
	public function setSshPort($_sshPort)
	{
		return ($this->sshPort = $_sshPort);
	}
	/**
	 * Get sshPort
	 * @return int
	 */
	public function getSshPort()
	{
		return $this->sshPort;
	}
	/**
	 * Set status
	 * @param int status
	 * @return int
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return int
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set src
	 * @param string src
	 * @return string
	 */
	public function setSrc($_src)
	{
		return ($this->src = $_src);
	}
	/**
	 * Get src
	 * @return string
	 */
	public function getSrc()
	{
		return $this->src;
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