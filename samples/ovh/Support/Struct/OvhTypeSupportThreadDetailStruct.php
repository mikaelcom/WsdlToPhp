<?php
/**
 * Class file for OvhTypeSupportThreadDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportThreadDetailStruct
 * @date 02/07/2012
 */
class OvhTypeSupportThreadDetailStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The unread
	 * @var int
	 */
	public $unread;
	/**
	 * The closed
	 * @var int
	 */
	public $closed;
	/**
	 * The answered
	 * @var int
	 */
	public $answered;
	/**
	 * Constructor
	 * @param int id
	 * @param string date
	 * @param string subject
	 * @param string domain
	 * @param string status
	 * @param int unread
	 * @param int closed
	 * @param int answered
	 * @return OvhTypeSupportThreadDetailStruct
	 */
	public function __construct($_id = null,$_date = null,$_subject = null,$_domain = null,$_status = null,$_unread = null,$_closed = null,$_answered = null)
	{
		parent::__construct(array('id'=>$_id,'date'=>$_date,'subject'=>$_subject,'domain'=>$_domain,'status'=>$_status,'unread'=>$_unread,'closed'=>$_closed,'answered'=>$_answered));
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
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
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
	 * Set unread
	 * @param int unread
	 * @return int
	 */
	public function setUnread($_unread)
	{
		return ($this->unread = $_unread);
	}
	/**
	 * Get unread
	 * @return int
	 */
	public function getUnread()
	{
		return $this->unread;
	}
	/**
	 * Set closed
	 * @param int closed
	 * @return int
	 */
	public function setClosed($_closed)
	{
		return ($this->closed = $_closed);
	}
	/**
	 * Get closed
	 * @return int
	 */
	public function getClosed()
	{
		return $this->closed;
	}
	/**
	 * Set answered
	 * @param int answered
	 * @return int
	 */
	public function setAnswered($_answered)
	{
		return ($this->answered = $_answered);
	}
	/**
	 * Get answered
	 * @return int
	 */
	public function getAnswered()
	{
		return $this->answered;
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