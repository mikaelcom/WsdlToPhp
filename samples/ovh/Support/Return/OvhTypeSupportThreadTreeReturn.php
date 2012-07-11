<?php
/**
 * Class file for OvhTypeSupportThreadTreeReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportThreadTreeReturn
 * @date 02/07/2012
 */
class OvhTypeSupportThreadTreeReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
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
	 * The closed
	 * @var int
	 */
	public $closed;
	/**
	 * The reportReason
	 * @var string
	 */
	public $reportReason;
	/**
	 * The messages
	 * @var OvhTypeMyArrayOfSupportThreadMessageDetailStructType
	 */
	public $messages;
	/**
	 * Constructor
	 * @param int id
	 * @param string subject
	 * @param string domain
	 * @param int closed
	 * @param string reportReason
	 * @param OvhTypeMyArrayOfSupportThreadMessageDetailStructType messages
	 * @return OvhTypeSupportThreadTreeReturn
	 */
	public function __construct($_id = null,$_subject = null,$_domain = null,$_closed = null,$_reportReason = null,$_messages = null)
	{
		parent::__construct(array('id'=>$_id,'subject'=>$_subject,'domain'=>$_domain,'closed'=>$_closed,'reportReason'=>$_reportReason,'messages'=>new OvhTypeMyArrayOfSupportThreadMessageDetailStructType($_messages)));
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
	 * Set messages
	 * @param MyArrayOfSupportThreadMessageDetailStructType messages
	 * @return MyArrayOfSupportThreadMessageDetailStructType
	 */
	public function setMessages($_messages)
	{
		return ($this->messages = $_messages);
	}
	/**
	 * Get messages
	 * @return OvhTypeMyArrayOfSupportThreadMessageDetailStructType
	 */
	public function getMessages()
	{
		return $this->messages;
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