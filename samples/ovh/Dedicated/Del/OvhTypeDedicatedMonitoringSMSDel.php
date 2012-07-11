<?php
/**
 * Class file for OvhTypeDedicatedMonitoringSMSDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMonitoringSMSDel
 * @date 02/07/2012
 */
class OvhTypeDedicatedMonitoringSMSDel extends OvhWsdlClass
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
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string id
	 * @return OvhTypeDedicatedMonitoringSMSDel
	 */
	public function __construct($_session = null,$_hostname = null,$_id = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'id'=>$_id));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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