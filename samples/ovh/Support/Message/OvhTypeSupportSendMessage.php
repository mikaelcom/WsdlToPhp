<?php
/**
 * Class file for OvhTypeSupportSendMessage
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportSendMessage
 * @date 02/07/2012
 */
class OvhTypeSupportSendMessage extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The messagePrevious
	 * @var int
	 */
	public $messagePrevious;
	/**
	 * The category
	 * @var int
	 */
	public $category;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
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
	 * Constructor
	 * @param string session
	 * @param int messagePrevious
	 * @param int category
	 * @param string domain
	 * @param string subject
	 * @param string body
	 * @return OvhTypeSupportSendMessage
	 */
	public function __construct($_session = null,$_messagePrevious = null,$_category = null,$_domain = null,$_subject = null,$_body = null)
	{
		parent::__construct(array('session'=>$_session,'messagePrevious'=>$_messagePrevious,'category'=>$_category,'domain'=>$_domain,'subject'=>$_subject,'body'=>$_body));
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
	 * Set messagePrevious
	 * @param int messagePrevious
	 * @return int
	 */
	public function setMessagePrevious($_messagePrevious)
	{
		return ($this->messagePrevious = $_messagePrevious);
	}
	/**
	 * Get messagePrevious
	 * @return int
	 */
	public function getMessagePrevious()
	{
		return $this->messagePrevious;
	}
	/**
	 * Set category
	 * @param int category
	 * @return int
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get category
	 * @return int
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>