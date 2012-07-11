<?php
/**
 * Class file for OvhTypeDedicatedBandwidthSwitching
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBandwidthSwitching
 * @date 02/07/2012
 */
class OvhTypeDedicatedBandwidthSwitching extends OvhWsdlClass
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
	 * The oldBandwidth
	 * @var string
	 */
	public $oldBandwidth;
	/**
	 * The newBandwidth
	 * @var string
	 */
	public $newBandwidth;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string oldBandwidth
	 * @param string newBandwidth
	 * @return OvhTypeDedicatedBandwidthSwitching
	 */
	public function __construct($_session = null,$_hostname = null,$_oldBandwidth = null,$_newBandwidth = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'oldBandwidth'=>$_oldBandwidth,'newBandwidth'=>$_newBandwidth));
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
	 * Set oldBandwidth
	 * @param string oldBandwidth
	 * @return string
	 */
	public function setOldBandwidth($_oldBandwidth)
	{
		return ($this->oldBandwidth = $_oldBandwidth);
	}
	/**
	 * Get oldBandwidth
	 * @return string
	 */
	public function getOldBandwidth()
	{
		return $this->oldBandwidth;
	}
	/**
	 * Set newBandwidth
	 * @param string newBandwidth
	 * @return string
	 */
	public function setNewBandwidth($_newBandwidth)
	{
		return ($this->newBandwidth = $_newBandwidth);
	}
	/**
	 * Get newBandwidth
	 * @return string
	 */
	public function getNewBandwidth()
	{
		return $this->newBandwidth;
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