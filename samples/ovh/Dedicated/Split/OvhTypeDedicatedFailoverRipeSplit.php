<?php
/**
 * Class file for OvhTypeDedicatedFailoverRipeSplit
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverRipeSplit
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverRipeSplit extends OvhWsdlClass
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
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * The networkIp
	 * @var string
	 */
	public $networkIp;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string netname
	 * @param string networkIp
	 * @return OvhTypeDedicatedFailoverRipeSplit
	 */
	public function __construct($_session = null,$_hostname = null,$_netname = null,$_networkIp = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'netname'=>$_netname,'networkIp'=>$_networkIp));
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
	 * Set netname
	 * @param string netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get netname
	 * @return string
	 */
	public function getNetname()
	{
		return $this->netname;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>