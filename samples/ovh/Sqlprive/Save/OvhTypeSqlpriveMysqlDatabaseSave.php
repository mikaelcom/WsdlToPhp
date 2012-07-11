<?php
/**
 * Class file for OvhTypeSqlpriveMysqlDatabaseSave
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlDatabaseSave
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlDatabaseSave extends OvhWsdlClass
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
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The compress
	 * @var boolean
	 */
	public $compress;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string database
	 * @param string comment
	 * @param boolean compress
	 * @return OvhTypeSqlpriveMysqlDatabaseSave
	 */
	public function __construct($_session = null,$_server = null,$_database = null,$_comment = null,$_compress = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'database'=>$_database,'comment'=>$_comment,'compress'=>$_compress));
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
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set compress
	 * @param boolean compress
	 * @return boolean
	 */
	public function setCompress($_compress)
	{
		return ($this->compress = $_compress);
	}
	/**
	 * Get compress
	 * @return boolean
	 */
	public function getCompress()
	{
		return $this->compress;
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