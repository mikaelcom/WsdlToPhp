<?php
/**
 * Class file for OvhTypeTicketCreate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketCreate
 * @date 02/07/2012
 */
class OvhTypeTicketCreate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The componentType
	 * @var string
	 */
	public $componentType;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The phone
	 * @var string
	 */
	public $phone;
	/**
	 * The subject
	 * @var string
	 */
	public $subject;
	/**
	 * The incidentSummary
	 * @var string
	 */
	public $incidentSummary;
	/**
	 * The incidentDetails
	 * @var string
	 */
	public $incidentDetails;
	/**
	 * The incidentManip
	 * @var string
	 */
	public $incidentManip;
	/**
	 * The level
	 * @var string
	 */
	public $level;
	/**
	 * Constructor
	 * @param string session
	 * @param string componentType
	 * @param string domain
	 * @param string email
	 * @param string phone
	 * @param string subject
	 * @param string incidentSummary
	 * @param string incidentDetails
	 * @param string incidentManip
	 * @param string level
	 * @return OvhTypeTicketCreate
	 */
	public function __construct($_session = null,$_componentType = null,$_domain = null,$_email = null,$_phone = null,$_subject = null,$_incidentSummary = null,$_incidentDetails = null,$_incidentManip = null,$_level = null)
	{
		parent::__construct(array('session'=>$_session,'componentType'=>$_componentType,'domain'=>$_domain,'email'=>$_email,'phone'=>$_phone,'subject'=>$_subject,'incidentSummary'=>$_incidentSummary,'incidentDetails'=>$_incidentDetails,'incidentManip'=>$_incidentManip,'level'=>$_level));
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
	 * Set incidentSummary
	 * @param string incidentSummary
	 * @return string
	 */
	public function setIncidentSummary($_incidentSummary)
	{
		return ($this->incidentSummary = $_incidentSummary);
	}
	/**
	 * Get incidentSummary
	 * @return string
	 */
	public function getIncidentSummary()
	{
		return $this->incidentSummary;
	}
	/**
	 * Set incidentDetails
	 * @param string incidentDetails
	 * @return string
	 */
	public function setIncidentDetails($_incidentDetails)
	{
		return ($this->incidentDetails = $_incidentDetails);
	}
	/**
	 * Get incidentDetails
	 * @return string
	 */
	public function getIncidentDetails()
	{
		return $this->incidentDetails;
	}
	/**
	 * Set incidentManip
	 * @param string incidentManip
	 * @return string
	 */
	public function setIncidentManip($_incidentManip)
	{
		return ($this->incidentManip = $_incidentManip);
	}
	/**
	 * Get incidentManip
	 * @return string
	 */
	public function getIncidentManip()
	{
		return $this->incidentManip;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>