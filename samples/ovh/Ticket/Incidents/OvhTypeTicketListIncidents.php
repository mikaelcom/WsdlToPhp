<?php
/**
 * Class file for OvhTypeTicketListIncidents
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketListIncidents
 * @date 02/07/2012
 */
class OvhTypeTicketListIncidents extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor
	 * @param string session
	 * @param string status
	 * @return OvhTypeTicketListIncidents
	 */
	public function __construct($_session = null,$_status = null)
	{
		parent::__construct(array('session'=>$_session,'status'=>$_status));
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
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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