<?php
/**
 * Class file for OvhTypeDedicatedHardRebootDo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedHardRebootDo
 * @date 02/07/2012
 */
class OvhTypeDedicatedHardRebootDo extends OvhWsdlClass
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
	 * The reason
	 * @var string
	 */
	public $reason;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The emailLanguage
	 * @var string
	 */
	public $emailLanguage;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string reason
	 * @param string email
	 * @param string emailLanguage
	 * @return OvhTypeDedicatedHardRebootDo
	 */
	public function __construct($_session = null,$_hostname = null,$_reason = null,$_email = null,$_emailLanguage = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'reason'=>$_reason,'email'=>$_email,'emailLanguage'=>$_emailLanguage));
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
	 * Set reason
	 * @param string reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
	}
	/**
	 * Get reason
	 * @return string
	 */
	public function getReason()
	{
		return $this->reason;
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
	 * Set emailLanguage
	 * @param string emailLanguage
	 * @return string
	 */
	public function setEmailLanguage($_emailLanguage)
	{
		return ($this->emailLanguage = $_emailLanguage);
	}
	/**
	 * Get emailLanguage
	 * @return string
	 */
	public function getEmailLanguage()
	{
		return $this->emailLanguage;
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