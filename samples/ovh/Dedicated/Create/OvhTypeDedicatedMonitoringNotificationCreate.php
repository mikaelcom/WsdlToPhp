<?php
/**
 * Class file for OvhTypeDedicatedMonitoringNotificationCreate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringNotificationCreate
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringNotificationCreate extends OvhWsdlClass
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
	 * The nicAlert
	 * @var string
	 */
	public $nicAlert;
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
	 * @param string nicAlert
	 * @param string language
	 * @param string status
	 * @return OvhTypeDedicatedMonitoringNotificationCreate
	 */
	public function __construct($_session = null,$_hostname = null,$_nicAlert = null,$_language = null,$_status = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'nicAlert'=>$_nicAlert,'language'=>$_language,'status'=>$_status));
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
	 * Set nicAlert
	 * @param string nicAlert
	 * @return string
	 */
	public function setNicAlert($_nicAlert)
	{
		return ($this->nicAlert = $_nicAlert);
	}
	/**
	 * Get nicAlert
	 * @return string
	 */
	public function getNicAlert()
	{
		return $this->nicAlert;
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