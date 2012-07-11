<?php
/**
 * Class file for OvhTypeSqlpriveCronDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveCronDel
 * @date 02/07/2012
 */
class OvhTypeSqlpriveCronDel extends OvhWsdlClass
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
	 * The cronId
	 * @var string
	 */
	public $cronId;
	/**
	 * Constructor
	 * @param string session
	 * @param string server
	 * @param string cronId
	 * @return OvhTypeSqlpriveCronDel
	 */
	public function __construct($_session = null,$_server = null,$_cronId = null)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'cronId'=>$_cronId));
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
	 * Set cronId
	 * @param string cronId
	 * @return string
	 */
	public function setCronId($_cronId)
	{
		return ($this->cronId = $_cronId);
	}
	/**
	 * Get cronId
	 * @return string
	 */
	public function getCronId()
	{
		return $this->cronId;
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