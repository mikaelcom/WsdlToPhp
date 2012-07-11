<?php
/**
 * Class file for OvhTypeSqlpriveMysqlDatabaseImportFromFile
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlDatabaseImportFromFile
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlDatabaseImportFromFile extends OvhWsdlClass
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
	 * The filename
	 * @var string
	 */
	public $filename;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string database
	 * @param string filename
	 * @return OvhTypeSqlpriveMysqlDatabaseImportFromFile
	 */
	public function __construct($_session = null,$_server = null,$_database = null,$_filename = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'database'=>$_database,'filename'=>$_filename));
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
	 * Set filename
	 * @param string filename
	 * @return string
	 */
	public function setFilename($_filename)
	{
		return ($this->filename = $_filename);
	}
	/**
	 * Get filename
	 * @return string
	 */
	public function getFilename()
	{
		return $this->filename;
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