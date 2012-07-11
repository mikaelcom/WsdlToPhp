<?php
/**
 * Class file for OvhTypeFullTicketReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeFullTicketReturn
 * @date 02/07/2012
 */
class OvhTypeFullTicketReturn extends OvhWsdlClass
{
	/**
	 * The ticketId
	 * @var int
	 */
	public $ticketId;
	/**
	 * The requestStatus
	 * @var string
	 */
	public $requestStatus;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The phone
	 * @var string
	 */
	public $phone;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The level
	 * @var string
	 */
	public $level;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The componentType
	 * @var string
	 */
	public $componentType;
	/**
	 * The messages
	 * @var OvhTypeMyArrayOfMessageDetailStructType
	 */
	public $messages;
	/**
	 * Constructor
	 * @param int ticketId
	 * @param string requestStatus
	 * @param string status
	 * @param string subject
	 * @param string nic
	 * @param string phone
	 * @param string email
	 * @param string level
	 * @param string domain
	 * @param int orderId
	 * @param string componentType
	 * @param OvhTypeMyArrayOfMessageDetailStructType messages
	 * @return OvhTypeFullTicketReturn
	 */
	public function __construct($_ticketId = null,$_requestStatus = null,$_status = null,$_subject = null,$_nic = null,$_phone = null,$_email = null,$_level = null,$_domain = null,$_orderId = null,$_componentType = null,$_messages = null)
	{
		parent::__construct(array('ticketId'=>$_ticketId,'requestStatus'=>$_requestStatus,'status'=>$_status,'subject'=>$_subject,'nic'=>$_nic,'phone'=>$_phone,'email'=>$_email,'level'=>$_level,'domain'=>$_domain,'orderId'=>$_orderId,'componentType'=>$_componentType,'messages'=>new OvhTypeMyArrayOfMessageDetailStructType($_messages)));
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
	 * Set requestStatus
	 * @param string requestStatus
	 * @return string
	 */
	public function setRequestStatus($_requestStatus)
	{
		return ($this->requestStatus = $_requestStatus);
	}
	/**
	 * Get requestStatus
	 * @return string
	 */
	public function getRequestStatus()
	{
		return $this->requestStatus;
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
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set phone
	 * @param string phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set level
	 * @param string level
	 * @return string
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Get level
	 * @return string
	 */
	public function getLevel()
	{
		return $this->level;
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
	 * Set orderId
	 * @param int orderId
	 * @return int
	 */
	public function setOrderId($_orderId)
	{
		return ($this->orderId = $_orderId);
	}
	/**
	 * Get orderId
	 * @return int
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}
	/**
	 * Set componentType
	 * @param string componentType
	 * @return string
	 */
	public function setComponentType($_componentType)
	{
		return ($this->componentType = $_componentType);
	}
	/**
	 * Get componentType
	 * @return string
	 */
	public function getComponentType()
	{
		return $this->componentType;
	}
	/**
	 * Set messages
	 * @param MyArrayOfMessageDetailStructType messages
	 * @return MyArrayOfMessageDetailStructType
	 */
	public function setMessages($_messages)
	{
		return ($this->messages = $_messages);
	}
	/**
	 * Get messages
	 * @return OvhTypeMyArrayOfMessageDetailStructType
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