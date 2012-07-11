<?php
/**
 * Class file for OvhTypeDomainDnsUpdate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainDnsUpdate
 * @date 02/07/2012
 */
class OvhTypeDomainDnsUpdate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The dns1
	 * @var string
	 */
	public $dns1;
	/**
	 * The ip1
	 * @var string
	 */
	public $ip1;
	/**
	 * The dns2
	 * @var string
	 */
	public $dns2;
	/**
	 * The ip2
	 * @var string
	 */
	public $ip2;
	/**
	 * The dns3
	 * @var string
	 */
	public $dns3;
	/**
	 * The ip3
	 * @var string
	 */
	public $ip3;
	/**
	 * The dns4
	 * @var string
	 */
	public $dns4;
	/**
	 * The ip4
	 * @var string
	 */
	public $ip4;
	/**
	 * The dns5
	 * @var string
	 */
	public $dns5;
	/**
	 * The ip5
	 * @var string
	 */
	public $ip5;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string dns1
	 * @param string ip1
	 * @param string dns2
	 * @param string ip2
	 * @param string dns3
	 * @param string ip3
	 * @param string dns4
	 * @param string ip4
	 * @param string dns5
	 * @param string ip5
	 * @return OvhTypeDomainDnsUpdate
	 */
	public function __construct($_session = null,$_domain = null,$_dns1 = null,$_ip1 = null,$_dns2 = null,$_ip2 = null,$_dns3 = null,$_ip3 = null,$_dns4 = null,$_ip4 = null,$_dns5 = null,$_ip5 = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'dns1'=>$_dns1,'ip1'=>$_ip1,'dns2'=>$_dns2,'ip2'=>$_ip2,'dns3'=>$_dns3,'ip3'=>$_ip3,'dns4'=>$_dns4,'ip4'=>$_ip4,'dns5'=>$_dns5,'ip5'=>$_ip5));
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
	 * Set dns1
	 * @param string dns1
	 * @return string
	 */
	public function setDns1($_dns1)
	{
		return ($this->dns1 = $_dns1);
	}
	/**
	 * Get dns1
	 * @return string
	 */
	public function getDns1()
	{
		return $this->dns1;
	}
	/**
	 * Set ip1
	 * @param string ip1
	 * @return string
	 */
	public function setIp1($_ip1)
	{
		return ($this->ip1 = $_ip1);
	}
	/**
	 * Get ip1
	 * @return string
	 */
	public function getIp1()
	{
		return $this->ip1;
	}
	/**
	 * Set dns2
	 * @param string dns2
	 * @return string
	 */
	public function setDns2($_dns2)
	{
		return ($this->dns2 = $_dns2);
	}
	/**
	 * Get dns2
	 * @return string
	 */
	public function getDns2()
	{
		return $this->dns2;
	}
	/**
	 * Set ip2
	 * @param string ip2
	 * @return string
	 */
	public function setIp2($_ip2)
	{
		return ($this->ip2 = $_ip2);
	}
	/**
	 * Get ip2
	 * @return string
	 */
	public function getIp2()
	{
		return $this->ip2;
	}
	/**
	 * Set dns3
	 * @param string dns3
	 * @return string
	 */
	public function setDns3($_dns3)
	{
		return ($this->dns3 = $_dns3);
	}
	/**
	 * Get dns3
	 * @return string
	 */
	public function getDns3()
	{
		return $this->dns3;
	}
	/**
	 * Set ip3
	 * @param string ip3
	 * @return string
	 */
	public function setIp3($_ip3)
	{
		return ($this->ip3 = $_ip3);
	}
	/**
	 * Get ip3
	 * @return string
	 */
	public function getIp3()
	{
		return $this->ip3;
	}
	/**
	 * Set dns4
	 * @param string dns4
	 * @return string
	 */
	public function setDns4($_dns4)
	{
		return ($this->dns4 = $_dns4);
	}
	/**
	 * Get dns4
	 * @return string
	 */
	public function getDns4()
	{
		return $this->dns4;
	}
	/**
	 * Set ip4
	 * @param string ip4
	 * @return string
	 */
	public function setIp4($_ip4)
	{
		return ($this->ip4 = $_ip4);
	}
	/**
	 * Get ip4
	 * @return string
	 */
	public function getIp4()
	{
		return $this->ip4;
	}
	/**
	 * Set dns5
	 * @param string dns5
	 * @return string
	 */
	public function setDns5($_dns5)
	{
		return ($this->dns5 = $_dns5);
	}
	/**
	 * Get dns5
	 * @return string
	 */
	public function getDns5()
	{
		return $this->dns5;
	}
	/**
	 * Set ip5
	 * @param string ip5
	 * @return string
	 */
	public function setIp5($_ip5)
	{
		return ($this->ip5 = $_ip5);
	}
	/**
	 * Get ip5
	 * @return string
	 */
	public function getIp5()
	{
		return $this->ip5;
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