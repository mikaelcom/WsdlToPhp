<?php
/**
 * Class file for OvhTypeDedicatedSecondaryDNSAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedSecondaryDNSAdd
 * @date 02/07/2012
 */
class OvhTypeDedicatedSecondaryDNSAdd extends OvhWsdlClass
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
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The nameserver
	 * @var string
	 */
	public $nameserver;
	/**
	 * The nameserverIp
	 * @var string
	 */
	public $nameserverIp;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string ip
	 * @param string domain
	 * @param string nameserver
	 * @param string nameserverIp
	 * @return OvhTypeDedicatedSecondaryDNSAdd
	 */
	public function __construct($_session = null,$_hostname = null,$_ip = null,$_domain = null,$_nameserver = null,$_nameserverIp = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'domain'=>$_domain,'nameserver'=>$_nameserver,'nameserverIp'=>$_nameserverIp));
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
	 * Set nameserver
	 * @param string nameserver
	 * @return string
	 */
	public function setNameserver($_nameserver)
	{
		return ($this->nameserver = $_nameserver);
	}
	/**
	 * Get nameserver
	 * @return string
	 */
	public function getNameserver()
	{
		return $this->nameserver;
	}
	/**
	 * Set nameserverIp
	 * @param string nameserverIp
	 * @return string
	 */
	public function setNameserverIp($_nameserverIp)
	{
		return ($this->nameserverIp = $_nameserverIp);
	}
	/**
	 * Get nameserverIp
	 * @return string
	 */
	public function getNameserverIp()
	{
		return $this->nameserverIp;
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