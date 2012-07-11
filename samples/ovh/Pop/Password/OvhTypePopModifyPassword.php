<?php
/**
 * Class file for OvhTypePopModifyPassword
 * @date 02/07/2012
 */
/**
 * Class OvhTypePopModifyPassword
 * @date 02/07/2012
 */
class OvhTypePopModifyPassword extends OvhWsdlClass
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
	 * The pop
	 * @var string
	 */
	public $pop;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The doNotSendMail
	 * @var boolean
	 */
	public $doNotSendMail;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string pop
	 * @param string password
	 * @param boolean doNotSendMail
	 * @return OvhTypePopModifyPassword
	 */
	public function __construct($_session = null,$_domain = null,$_pop = null,$_password = null,$_doNotSendMail = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'pop'=>$_pop,'password'=>$_password,'doNotSendMail'=>$_doNotSendMail));
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
	 * Set pop
	 * @param string pop
	 * @return string
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
	}
	/**
	 * Get pop
	 * @return string
	 */
	public function getPop()
	{
		return $this->pop;
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
	 * Set doNotSendMail
	 * @param boolean doNotSendMail
	 * @return boolean
	 */
	public function setDoNotSendMail($_doNotSendMail)
	{
		return ($this->doNotSendMail = $_doNotSendMail);
	}
	/**
	 * Get doNotSendMail
	 * @return boolean
	 */
	public function getDoNotSendMail()
	{
		return $this->doNotSendMail;
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