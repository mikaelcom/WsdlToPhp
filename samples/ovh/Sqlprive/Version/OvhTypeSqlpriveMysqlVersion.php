<?php
/**
 * Class file for OvhTypeSqlpriveMysqlVersion
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlVersion
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlVersion extends OvhWsdlClass
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
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string version
	 * @return OvhTypeSqlpriveMysqlVersion
	 */
	public function __construct($_session = null,$_server = null,$_version = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'version'=>$_version));
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
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
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