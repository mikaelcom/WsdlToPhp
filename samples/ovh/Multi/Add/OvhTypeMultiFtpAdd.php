<?php
/**
 * Class file for OvhTypeMultiFtpAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiFtpAdd
 * @date 02/07/2012
 */
class OvhTypeMultiFtpAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The subdir
	 * @var string
	 */
	public $subdir;
	/**
	 * The loginsuffix
	 * @var string
	 */
	public $loginsuffix;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string subdir
	 * @param string loginsuffix
	 * @param string password
	 * @return OvhTypeMultiFtpAdd
	 */
	public function __construct($_session = null,$_domain = null,$_subdir = null,$_loginsuffix = null,$_password = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdir'=>$_subdir,'loginsuffix'=>$_loginsuffix,'password'=>$_password));
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
	 * Set subdir
	 * @param string subdir
	 * @return string
	 */
	public function setSubdir($_subdir)
	{
		return ($this->subdir = $_subdir);
	}
	/**
	 * Get subdir
	 * @return string
	 */
	public function getSubdir()
	{
		return $this->subdir;
	}
	/**
	 * Set loginsuffix
	 * @param string loginsuffix
	 * @return string
	 */
	public function setLoginsuffix($_loginsuffix)
	{
		return ($this->loginsuffix = $_loginsuffix);
	}
	/**
	 * Get loginsuffix
	 * @return string
	 */
	public function getLoginsuffix()
	{
		return $this->loginsuffix;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
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