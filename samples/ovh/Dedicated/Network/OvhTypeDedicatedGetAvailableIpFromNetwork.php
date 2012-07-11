<?php
/**
 * Class file for OvhTypeDedicatedGetAvailableIpFromNetwork
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedGetAvailableIpFromNetwork
 * @date 02/07/2012
 */
class OvhTypeDedicatedGetAvailableIpFromNetwork extends OvhWsdlClass
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
	 * The network
	 * @var string
	 */
	public $network;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string network
	 * @return OvhTypeDedicatedGetAvailableIpFromNetwork
	 */
	public function __construct($_session = null,$_hostname = null,$_network = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'network'=>$_network));
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
	 * Set network
	 * @param string network
	 * @return string
	 */
	public function setNetwork($_network)
	{
		return ($this->network = $_network);
	}
	/**
	 * Get network
	 * @return string
	 */
	public function getNetwork()
	{
		return $this->network;
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