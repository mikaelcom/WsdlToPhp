<?php
/**
 * Class file for OvhTypeTicketStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketStruct
 * @date 02/07/2012
 */
class OvhTypeTicketStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The creationDate
	 * @var string
	 */
	public $creationDate;
	/**
	 * The requestStatus
	 * @var string
	 */
	public $requestStatus;
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
	 * Constructor
	 * @param int id
	 * @param string creationDate
	 * @param string requestStatus
	 * @param string subject
	 * @param string nic
	 * @param string level
	 * @param string domain
	 * @param int orderId
	 * @param string componentType
	 * @return OvhTypeTicketStruct
	 */
	public function __construct($_id = null,$_creationDate = null,$_requestStatus = null,$_subject = null,$_nic = null,$_level = null,$_domain = null,$_orderId = null,$_componentType = null)
	{
		parent::__construct(array('id'=>$_id,'creationDate'=>$_creationDate,'requestStatus'=>$_requestStatus,'subject'=>$_subject,'nic'=>$_nic,'level'=>$_level,'domain'=>$_domain,'orderId'=>$_orderId,'componentType'=>$_componentType));
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
	 * Set creationDate
	 * @param string creationDate
	 * @return string
	 */
	public function setCreationDate($_creationDate)
	{
		return ($this->creationDate = $_creationDate);
	}
	/**
	 * Get creationDate
	 * @return string
	 */
	public function getCreationDate()
	{
		return $this->creationDate;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>