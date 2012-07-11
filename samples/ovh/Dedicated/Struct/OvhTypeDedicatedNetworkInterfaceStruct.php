<?php
/**
 * Class file for OvhTypeDedicatedNetworkInterfaceStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetworkInterfaceStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetworkInterfaceStruct extends OvhWsdlClass
{
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The ipv6
	 * @var string
	 */
	public $ipv6;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The switch
	 * @var string
	 */
	public $switch;
	/**
	 * The icmp_drop
	 * @var boolean
	 */
	public $icmp_drop;
	/**
	 * The failover
	 * @var boolean
	 */
	public $failover;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The ssl
	 * @var boolean
	 */
	public $ssl;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string reverse
	 * @param string ip
	 * @param string ipv6
	 * @param string mac
	 * @param string switch
	 * @param boolean icmp_drop
	 * @param boolean failover
	 * @param string routedTo
	 * @param boolean ssl
	 * @param string country
	 * @return OvhTypeDedicatedNetworkInterfaceStruct
	 */
	public function __construct($_reverse = null,$_ip = null,$_ipv6 = null,$_mac = null,$_switch = null,$_icmp_drop = null,$_failover = null,$_routedTo = null,$_ssl = null,$_country = null)
	{
		parent::__construct(array('reverse'=>$_reverse,'ip'=>$_ip,'ipv6'=>$_ipv6,'mac'=>$_mac,'switch'=>$_switch,'icmp_drop'=>$_icmp_drop,'failover'=>$_failover,'routedTo'=>$_routedTo,'ssl'=>$_ssl,'country'=>$_country));
	}
	/**
	 * Set reverse
	 * @param string reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Get reverse
	 * @return string
	 */
	public function getReverse()
	{
		return $this->reverse;
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
	 * Set mac
	 * @param string mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get mac
	 * @return string
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set switch
	 * @param string switch
	 * @return string
	 */
	public function setSwitch($_switch)
	{
		return ($this->switch = $_switch);
	}
	/**
	 * Get switch
	 * @return string
	 */
	public function getSwitch()
	{
		return $this->switch;
	}
	/**
	 * Set icmp_drop
	 * @param boolean icmp_drop
	 * @return boolean
	 */
	public function setIcmp_drop($_icmp_drop)
	{
		return ($this->icmp_drop = $_icmp_drop);
	}
	/**
	 * Get icmp_drop
	 * @return boolean
	 */
	public function getIcmp_drop()
	{
		return $this->icmp_drop;
	}
	/**
	 * Set failover
	 * @param boolean failover
	 * @return boolean
	 */
	public function setFailover($_failover)
	{
		return ($this->failover = $_failover);
	}
	/**
	 * Get failover
	 * @return boolean
	 */
	public function getFailover()
	{
		return $this->failover;
	}
	/**
	 * Set routedTo
	 * @param string routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
	}
	/**
	 * Get routedTo
	 * @return string
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
	}
	/**
	 * Set ssl
	 * @param boolean ssl
	 * @return boolean
	 */
	public function setSsl($_ssl)
	{
		return ($this->ssl = $_ssl);
	}
	/**
	 * Get ssl
	 * @return boolean
	 */
	public function getSsl()
	{
		return $this->ssl;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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