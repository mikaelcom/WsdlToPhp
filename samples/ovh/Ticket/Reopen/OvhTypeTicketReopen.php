<?php
/**
 * Class file for OvhTypeTicketReopen
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketReopen
 * @date 02/07/2012
 */
class OvhTypeTicketReopen extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ticketId
	 * @var int
	 */
	public $ticketId;
	/**
	 * Constructor
	 * @param string session
	 * @param int ticketId
	 * @return OvhTypeTicketReopen
	 */
	public function __construct($_session = null,$_ticketId = null)
	{
		parent::__construct(array('session'=>$_session,'ticketId'=>$_ticketId));
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
	 * Set ticketId
	 * @param int ticketId
	 * @return int
	 */
	public function setTicketId($_ticketId)
	{
		return ($this->ticketId = $_ticketId);
	}
	/**
	 * Get ticketId
	 * @return int
	 */
	public function getTicketId()
	{
		return $this->ticketId;
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