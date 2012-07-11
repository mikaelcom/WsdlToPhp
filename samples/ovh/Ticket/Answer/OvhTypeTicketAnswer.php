<?php
/**
 * Class file for OvhTypeTicketAnswer
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketAnswer
 * @date 02/07/2012
 */
class OvhTypeTicketAnswer extends OvhWsdlClass
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
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * Constructor
	 * @param string session
	 * @param int ticketId
	 * @param string message
	 * @return OvhTypeTicketAnswer
	 */
	public function __construct($_session = null,$_ticketId = null,$_message = null)
	{
		parent::__construct(array('session'=>$_session,'ticketId'=>$_ticketId,'message'=>$_message));
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
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
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