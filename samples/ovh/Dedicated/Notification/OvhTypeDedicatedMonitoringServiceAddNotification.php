<?php
/**
 * Class file for OvhTypeDedicatedMonitoringServiceAddNotification
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringServiceAddNotification
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringServiceAddNotification extends OvhWsdlClass
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
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The period
	 * @var string
	 */
	public $period;
	/**
	 * The string
	 * @var string
	 */
	public $string;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The nicAlert
	 * @var string
	 */
	public $nicAlert;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string ip
	 * @param int port
	 * @param string protocol
	 * @param string period
	 * @param string string
	 * @param string url
	 * @param string nicAlert
	 * @return OvhTypeDedicatedMonitoringServiceAddNotification
	 */
	public function __construct($_session = null,$_hostname = null,$_ip = null,$_port = null,$_protocol = null,$_period = null,$_string = null,$_url = null,$_nicAlert = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'port'=>$_port,'protocol'=>$_protocol,'period'=>$_period,'string'=>$_string,'url'=>$_url,'nicAlert'=>$_nicAlert));
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
	 * Set port
	 * @param int port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get port
	 * @return int
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set protocol
	 * @param string protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get protocol
	 * @return string
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set period
	 * @param string period
	 * @return string
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get period
	 * @return string
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set string
	 * @param string string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get string
	 * @return string
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>