<?php
/**
 * Class file for OvhTypeSqlpriveMysqlDatabaseList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlDatabaseList
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlDatabaseList extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string server
	 * @return OvhTypeSqlpriveMysqlDatabaseList
	 */
	public function __construct($_session = null,$_server = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>