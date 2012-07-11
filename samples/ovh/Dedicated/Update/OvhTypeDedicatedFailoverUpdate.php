<?php
/**
 * Class file for OvhTypeDedicatedFailoverUpdate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverUpdate
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverUpdate extends OvhWsdlClass
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
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string ip
	 * @param string routedTo
	 * @return OvhTypeDedicatedFailoverUpdate
	 */
	public function __construct($_session = null,$_hostname = null,$_ip = null,$_routedTo = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'routedTo'=>$_routedTo));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>