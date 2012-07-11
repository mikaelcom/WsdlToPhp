<?php
/**
 * Class file for OvhTypeDedicatedMrtgInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMrtgInfo
 * @date 02/07/2012
 */
class OvhTypeDedicatedMrtgInfo extends OvhWsdlClass
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
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The duration
	 * @var string
	 */
	public $duration;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string type
	 * @param string duration
	 * @param string ip
	 * @return OvhTypeDedicatedMrtgInfo
	 */
	public function __construct($_session = null,$_hostname = null,$_type = null,$_duration = null,$_ip = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'type'=>$_type,'duration'=>$_duration,'ip'=>$_ip));
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set duration
	 * @param string duration
	 * @return string
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get duration
	 * @return string
	 */
	public function getDuration()
	{
		return $this->duration;
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