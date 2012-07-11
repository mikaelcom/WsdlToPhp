<?php
/**
 * Class file for OvhTypeSupportMessageDetailReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportMessageDetailReturn
 * @date 02/07/2012
 */
class OvhTypeSupportMessageDetailReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The thread
	 * @var int
	 */
	public $thread;
	/**
	 * The unreadThread
	 * @var boolean
	 */
	public $unreadThread;
	/**
	 * The fromEmail
	 * @var string
	 */
	public $fromEmail;
	/**
	 * The dateSent
	 * @var string
	 */
	public $dateSent;
	/**
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The body
	 * @var string
	 */
	public $body;
	/**
	 * The reportReason
	 * @var string
	 */
	public $reportReason;
	/**
	 * Constructor
	 * @param int id
	 * @param int thread
	 * @param boolean unreadThread
	 * @param string fromEmail
	 * @param string dateSent
	 * @param string subject
	 * @param string body
	 * @param string reportReason
	 * @return OvhTypeSupportMessageDetailReturn
	 */
	public function __construct($_id = null,$_thread = null,$_unreadThread = null,$_fromEmail = null,$_dateSent = null,$_subject = null,$_body = null,$_reportReason = null)
	{
		parent::__construct(array('id'=>$_id,'thread'=>$_thread,'unreadThread'=>$_unreadThread,'fromEmail'=>$_fromEmail,'dateSent'=>$_dateSent,'subject'=>$_subject,'body'=>$_body,'reportReason'=>$_reportReason));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set thread
	 * @param int thread
	 * @return int
	 */
	public function setThread($_thread)
	{
		return ($this->thread = $_thread);
	}
	/**
	 * Get thread
	 * @return int
	 */
	public function getThread()
	{
		return $this->thread;
	}
	/**
	 * Set unreadThread
	 * @param boolean unreadThread
	 * @return boolean
	 */
	public function setUnreadThread($_unreadThread)
	{
		return ($this->unreadThread = $_unreadThread);
	}
	/**
	 * Get unreadThread
	 * @return boolean
	 */
	public function getUnreadThread()
	{
		return $this->unreadThread;
	}
	/**
	 * Set fromEmail
	 * @param string fromEmail
	 * @return string
	 */
	public function setFromEmail($_fromEmail)
	{
		return ($this->fromEmail = $_fromEmail);
	}
	/**
	 * Get fromEmail
	 * @return string
	 */
	public function getFromEmail()
	{
		return $this->fromEmail;
	}
	/**
	 * Set dateSent
	 * @param string dateSent
	 * @return string
	 */
	public function setDateSent($_dateSent)
	{
		return ($this->dateSent = $_dateSent);
	}
	/**
	 * Get dateSent
	 * @return string
	 */
	public function getDateSent()
	{
		return $this->dateSent;
	}
	/**
	 * Set subject
	 * @param string subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set body
	 * @param string body
	 * @return string
	 */
	public function setBody($_body)
	{
		return ($this->body = $_body);
	}
	/**
	 * Get body
	 * @return string
	 */
	public function getBody()
	{
		return $this->body;
	}
	/**
	 * Set reportReason
	 * @param string reportReason
	 * @return string
	 */
	public function setReportReason($_reportReason)
	{
		return ($this->reportReason = $_reportReason);
	}
	/**
	 * Get reportReason
	 * @return string
	 */
	public function getReportReason()
	{
		return $this->reportReason;
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