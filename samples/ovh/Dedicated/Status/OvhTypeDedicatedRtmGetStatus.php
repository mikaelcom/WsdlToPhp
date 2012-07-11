<?php
/**
 * Class file for OvhTypeDedicatedRtmGetStatus
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRtmGetStatus
 * @date 02/07/2012
 */
class OvhTypeDedicatedRtmGetStatus extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @return OvhTypeDedicatedRtmGetStatus
	 */
	public function __construct($_session = null,$_hostname = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>