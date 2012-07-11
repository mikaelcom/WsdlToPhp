<?php
/**
 * Class file for OvhTypeSqlpriveMysqlGetPossibleDump
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlGetPossibleDump
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlGetPossibleDump extends OvhWsdlClass
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
	 * The directory
	 * @var string
	 */
	public $directory;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string directory
	 * @return OvhTypeSqlpriveMysqlGetPossibleDump
	 */
	public function __construct($_session = null,$_server = null,$_directory = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'directory'=>$_directory));
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