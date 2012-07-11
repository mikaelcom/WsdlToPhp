<?php
/**
 * Class file for OvhTypeSupportCloseThreads
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportCloseThreads
 * @date 02/07/2012
 */
class OvhTypeSupportCloseThreads extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The threads
	 * @var string
	 */
	public $threads;
	/**
	 * Constructor
	 * @param string session
	 * @param string threads
	 * @return OvhTypeSupportCloseThreads
	 */
	public function __construct($_session = null,$_threads = null)
	{
		parent::__construct(array('session'=>$_session,'threads'=>$_threads));
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
	 * Set threads
	 * @param string threads
	 * @return string
	 */
	public function setThreads($_threads)
	{
		return ($this->threads = $_threads);
	}
	/**
	 * Get threads
	 * @return string
	 */
	public function getThreads()
	{
		return $this->threads;
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