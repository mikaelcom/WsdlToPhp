<?php
/**
 * Class file for OvhTypeLogsAccessDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeLogsAccessDel
 * @date 02/07/2012
 */
class OvhTypeLogsAccessDel extends OvhWsdlClass
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
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string user
	 * @return OvhTypeLogsAccessDel
	 */
	public function __construct($_session = null,$_domain = null,$_user = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'user'=>$_user));
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
	 * Set user
	 * @param string user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get user
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
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