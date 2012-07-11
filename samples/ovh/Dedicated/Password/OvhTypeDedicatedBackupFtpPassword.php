<?php
/**
 * Class file for OvhTypeDedicatedBackupFtpPassword
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupFtpPassword
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupFtpPassword extends OvhWsdlClass
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
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string email
	 * @param string language
	 * @return OvhTypeDedicatedBackupFtpPassword
	 */
	public function __construct($_session = null,$_hostname = null,$_email = null,$_language = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'email'=>$_email,'language'=>$_language));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>