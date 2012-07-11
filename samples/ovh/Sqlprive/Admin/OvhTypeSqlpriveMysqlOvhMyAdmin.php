<?php
/**
 * Class file for OvhTypeSqlpriveMysqlOvhMyAdmin
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlOvhMyAdmin
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlOvhMyAdmin extends OvhWsdlClass
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
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The database
	 * @var string
	 */
	public $database;
	/**
	 * The username
	 * @var string
	 */
	public $username;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string function
	 * @param string database
	 * @param string username
	 * @param string password
	 * @return OvhTypeSqlpriveMysqlOvhMyAdmin
	 */
	public function __construct($_session = null,$_server = null,$_function = null,$_database = null,$_username = null,$_password = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'function'=>$_function,'database'=>$_database,'username'=>$_username,'password'=>$_password));
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
	 * Set function
	 * @param string function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get function
	 * @return string
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set database
	 * @param string database
	 * @return string
	 */
	public function setDatabase($_database)
	{
		return ($this->database = $_database);
	}
	/**
	 * Get database
	 * @return string
	 */
	public function getDatabase()
	{
		return $this->database;
	}
	/**
	 * Set username
	 * @param string username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
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