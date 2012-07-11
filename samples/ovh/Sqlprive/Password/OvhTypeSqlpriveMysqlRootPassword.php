<?php
/**
 * Class file for OvhTypeSqlpriveMysqlRootPassword
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlRootPassword
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlRootPassword extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string password
	 * @return OvhTypeSqlpriveMysqlRootPassword
	 */
	public function __construct($_session = null,$_server = null,$_password = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'password'=>$_password));
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
	 * Set server
	 * @param string server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
	}
	/**
	 * Get server
	 * @return string
	 */
	public function getServer()
	{
		return $this->server;
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