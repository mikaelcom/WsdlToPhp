<?php
/**
 * Class file for OvhTypeDedicatedFailoverRipeModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverRipeModify
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverRipeModify extends OvhWsdlClass
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
	 * The hostnameNew
	 * @var string
	 */
	public $hostnameNew;
	/**
	 * The networkIp
	 * @var string
	 */
	public $networkIp;
	/**
	 * The suffix
	 * @var int
	 */
	public $suffix;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string hostnameNew
	 * @param string networkIp
	 * @param int suffix
	 * @param string ip
	 * @return OvhTypeDedicatedFailoverRipeModify
	 */
	public function __construct($_session = null,$_hostname = null,$_hostnameNew = null,$_networkIp = null,$_suffix = null,$_ip = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'hostnameNew'=>$_hostnameNew,'networkIp'=>$_networkIp,'suffix'=>$_suffix,'ip'=>$_ip));
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
	 * Set hostnameNew
	 * @param string hostnameNew
	 * @return string
	 */
	public function setHostnameNew($_hostnameNew)
	{
		return ($this->hostnameNew = $_hostnameNew);
	}
	/**
	 * Get hostnameNew
	 * @return string
	 */
	public function getHostnameNew()
	{
		return $this->hostnameNew;
	}
	/**
	 * Set networkIp
	 * @param string networkIp
	 * @return string
	 */
	public function setNetworkIp($_networkIp)
	{
		return ($this->networkIp = $_networkIp);
	}
	/**
	 * Get networkIp
	 * @return string
	 */
	public function getNetworkIp()
	{
		return $this->networkIp;
	}
	/**
	 * Set suffix
	 * @param int suffix
	 * @return int
	 */
	public function setSuffix($_suffix)
	{
		return ($this->suffix = $_suffix);
	}
	/**
	 * Get suffix
	 * @return int
	 */
	public function getSuffix()
	{
		return $this->suffix;
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
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