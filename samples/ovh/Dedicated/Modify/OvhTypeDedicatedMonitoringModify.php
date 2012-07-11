<?php
/**
 * Class file for OvhTypeDedicatedMonitoringModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringModify
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string id
	 * @param string email
	 * @param string language
	 * @param string status
	 * @return OvhTypeDedicatedMonitoringModify
	 */
	public function __construct($_session = null,$_hostname = null,$_id = null,$_email = null,$_language = null,$_status = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'id'=>$_id,'email'=>$_email,'language'=>$_language,'status'=>$_status));
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
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
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