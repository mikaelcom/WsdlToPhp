<?php
/**
 * Class file for OvhTypeSqlpriveMysqlDatabaseImportFromHost
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlDatabaseImportFromHost
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlDatabaseImportFromHost extends OvhWsdlClass
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
	 * The database
	 * @var string
	 */
	public $database;
	/**
	 * The foreignHost
	 * @var string
	 */
	public $foreignHost;
	/**
	 * The foreignUser
	 * @var string
	 */
	public $foreignUser;
	/**
	 * The foreignPassword
	 * @var string
	 */
	public $foreignPassword;
	/**
	 * The foreignDatabase
	 * @var string
	 */
	public $foreignDatabase;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string database
	 * @param string foreignHost
	 * @param string foreignUser
	 * @param string foreignPassword
	 * @param string foreignDatabase
	 * @return OvhTypeSqlpriveMysqlDatabaseImportFromHost
	 */
	public function __construct($_session = null,$_server = null,$_database = null,$_foreignHost = null,$_foreignUser = null,$_foreignPassword = null,$_foreignDatabase = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'database'=>$_database,'foreignHost'=>$_foreignHost,'foreignUser'=>$_foreignUser,'foreignPassword'=>$_foreignPassword,'foreignDatabase'=>$_foreignDatabase));
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
	 * Set foreignHost
	 * @param string foreignHost
	 * @return string
	 */
	public function setForeignHost($_foreignHost)
	{
		return ($this->foreignHost = $_foreignHost);
	}
	/**
	 * Get foreignHost
	 * @return string
	 */
	public function getForeignHost()
	{
		return $this->foreignHost;
	}
	/**
	 * Set foreignUser
	 * @param string foreignUser
	 * @return string
	 */
	public function setForeignUser($_foreignUser)
	{
		return ($this->foreignUser = $_foreignUser);
	}
	/**
	 * Get foreignUser
	 * @return string
	 */
	public function getForeignUser()
	{
		return $this->foreignUser;
	}
	/**
	 * Set foreignPassword
	 * @param string foreignPassword
	 * @return string
	 */
	public function setForeignPassword($_foreignPassword)
	{
		return ($this->foreignPassword = $_foreignPassword);
	}
	/**
	 * Get foreignPassword
	 * @return string
	 */
	public function getForeignPassword()
	{
		return $this->foreignPassword;
	}
	/**
	 * Set foreignDatabase
	 * @param string foreignDatabase
	 * @return string
	 */
	public function setForeignDatabase($_foreignDatabase)
	{
		return ($this->foreignDatabase = $_foreignDatabase);
	}
	/**
	 * Get foreignDatabase
	 * @return string
	 */
	public function getForeignDatabase()
	{
		return $this->foreignDatabase;
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