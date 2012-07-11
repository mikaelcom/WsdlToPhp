<?php
/**
 * Class file for OvhTypeSupportReactivateThread
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportReactivateThread
 * @date 02/07/2012
 */
class OvhTypeSupportReactivateThread extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The threadId
	 * @var int
	 */
	public $threadId;
	/**
	 * Constructor
	 * @param string session
	 * @param int threadId
	 * @return OvhTypeSupportReactivateThread
	 */
	public function __construct($_session = null,$_threadId = null)
	{
		parent::__construct(array('session'=>$_session,'threadId'=>$_threadId));
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
	 * Set threadId
	 * @param int threadId
	 * @return int
	 */
	public function setThreadId($_threadId)
	{
		return ($this->threadId = $_threadId);
	}
	/**
	 * Get threadId
	 * @return int
	 */
	public function getThreadId()
	{
		return $this->threadId;
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