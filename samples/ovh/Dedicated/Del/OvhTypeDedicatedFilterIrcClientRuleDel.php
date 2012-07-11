<?php
/**
 * Class file for OvhTypeDedicatedFilterIrcClientRuleDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFilterIrcClientRuleDel
 * @date 02/07/2012
 */
class OvhTypeDedicatedFilterIrcClientRuleDel extends OvhWsdlClass
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
	 * The fromIp
	 * @var string
	 */
	public $fromIp;
	/**
	 * The toIp
	 * @var string
	 */
	public $toIp;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string fromIp
	 * @param string toIp
	 * @return OvhTypeDedicatedFilterIrcClientRuleDel
	 */
	public function __construct($_session = null,$_hostname = null,$_fromIp = null,$_toIp = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'fromIp'=>$_fromIp,'toIp'=>$_toIp));
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
	 * Set fromIp
	 * @param string fromIp
	 * @return string
	 */
	public function setFromIp($_fromIp)
	{
		return ($this->fromIp = $_fromIp);
	}
	/**
	 * Get fromIp
	 * @return string
	 */
	public function getFromIp()
	{
		return $this->fromIp;
	}
	/**
	 * Set toIp
	 * @param string toIp
	 * @return string
	 */
	public function setToIp($_toIp)
	{
		return ($this->toIp = $_toIp);
	}
	/**
	 * Get toIp
	 * @return string
	 */
	public function getToIp()
	{
		return $this->toIp;
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