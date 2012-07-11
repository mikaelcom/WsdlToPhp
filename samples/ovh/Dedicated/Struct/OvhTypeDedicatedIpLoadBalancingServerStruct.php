<?php
/**
 * Class file for OvhTypeDedicatedIpLoadBalancingServerStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedIpLoadBalancingServerStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedIpLoadBalancingServerStruct extends OvhWsdlClass
{
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
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor
	 * @param string hostname
	 * @param string ip
	 * @param string status
	 * @return OvhTypeDedicatedIpLoadBalancingServerStruct
	 */
	public function __construct($_hostname = null,$_ip = null,$_status = null)
	{
		parent::__construct(array('hostname'=>$_hostname,'ip'=>$_ip,'status'=>$_status));
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