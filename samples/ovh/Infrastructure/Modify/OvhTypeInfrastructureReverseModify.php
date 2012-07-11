<?php
/**
 * Class file for OvhTypeInfrastructureReverseModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeInfrastructureReverseModify
 * @date 02/07/2012
 */
class OvhTypeInfrastructureReverseModify extends OvhWsdlClass
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
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string ip
	 * @param string reverse
	 * @return OvhTypeInfrastructureReverseModify
	 */
	public function __construct($_session = null,$_hostname = null,$_ip = null,$_reverse = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'reverse'=>$_reverse));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>