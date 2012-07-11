<?php
/**
 * Class file for OvhTypeDomainHostInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainHostInfoReturn
 * @date 02/07/2012
 */
class OvhTypeDomainHostInfoReturn extends OvhWsdlClass
{
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The ipv4
	 * @var string
	 */
	public $ipv4;
	/**
	 * The ipv6
	 * @var string
	 */
	public $ipv6;
	/**
	 * Constructor
	 * @param string hostname
	 * @param string ipv4
	 * @param string ipv6
	 * @return OvhTypeDomainHostInfoReturn
	 */
	public function __construct($_hostname = null,$_ipv4 = null,$_ipv6 = null)
	{
		parent::__construct(array('hostname'=>$_hostname,'ipv4'=>$_ipv4,'ipv6'=>$_ipv6));
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
	 * Set ipv4
	 * @param string ipv4
	 * @return string
	 */
	public function setIpv4($_ipv4)
	{
		return ($this->ipv4 = $_ipv4);
	}
	/**
	 * Get ipv4
	 * @return string
	 */
	public function getIpv4()
	{
		return $this->ipv4;
	}
	/**
	 * Set ipv6
	 * @param string ipv6
	 * @return string
	 */
	public function setIpv6($_ipv6)
	{
		return ($this->ipv6 = $_ipv6);
	}
	/**
	 * Get ipv6
	 * @return string
	 */
	public function getIpv6()
	{
		return $this->ipv6;
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