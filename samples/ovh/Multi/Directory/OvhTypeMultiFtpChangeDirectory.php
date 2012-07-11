<?php
/**
 * Class file for OvhTypeMultiFtpChangeDirectory
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiFtpChangeDirectory
 * @date 02/07/2012
 */
class OvhTypeMultiFtpChangeDirectory extends OvhWsdlClass
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
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The directory
	 * @var string
	 */
	public $directory;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string login
	 * @param string directory
	 * @return OvhTypeMultiFtpChangeDirectory
	 */
	public function __construct($_session = null,$_domain = null,$_login = null,$_directory = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'login'=>$_login,'directory'=>$_directory));
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
	 * Set login
	 * @param string login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get login
	 * @return string
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set directory
	 * @param string directory
	 * @return string
	 */
	public function setDirectory($_directory)
	{
		return ($this->directory = $_directory);
	}
	/**
	 * Get directory
	 * @return string
	 */
	public function getDirectory()
	{
		return $this->directory;
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