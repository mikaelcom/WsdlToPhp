<?php
/**
 * Class file for OvhTypeFtpChangePassword
 * @date 02/07/2012
 */
/**
 * Class OvhTypeFtpChangePassword
 * @date 02/07/2012
 */
class OvhTypeFtpChangePassword extends OvhWsdlClass
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
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The oldstate
	 * @var string
	 */
	public $oldstate;
	/**
	 * The newstate
	 * @var string
	 */
	public $newstate;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string password
	 * @param string oldstate
	 * @param string newstate
	 * @return OvhTypeFtpChangePassword
	 */
	public function __construct($_session = null,$_domain = null,$_password = null,$_oldstate = null,$_newstate = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'password'=>$_password,'oldstate'=>$_oldstate,'newstate'=>$_newstate));
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
	 * Set oldstate
	 * @param string oldstate
	 * @return string
	 */
	public function setOldstate($_oldstate)
	{
		return ($this->oldstate = $_oldstate);
	}
	/**
	 * Get oldstate
	 * @return string
	 */
	public function getOldstate()
	{
		return $this->oldstate;
	}
	/**
	 * Set newstate
	 * @param string newstate
	 * @return string
	 */
	public function setNewstate($_newstate)
	{
		return ($this->newstate = $_newstate);
	}
	/**
	 * Get newstate
	 * @return string
	 */
	public function getNewstate()
	{
		return $this->newstate;
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