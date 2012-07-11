<?php
/**
 * Class file for OvhTypeDedicatedNetbootModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetbootModify
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetbootModify extends OvhWsdlClass
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
	 * The kernel
	 * @var string
	 */
	public $kernel;
	/**
	 * The cpufamily
	 * @var string
	 */
	public $cpufamily;
	/**
	 * The grsec
	 * @var boolean
	 */
	public $grsec;
	/**
	 * The smp
	 * @var boolean
	 */
	public $smp;
	/**
	 * The ipv6
	 * @var boolean
	 */
	public $ipv6;
	/**
	 * The root
	 * @var string
	 */
	public $root;
	/**
	 * The rescueEmail
	 * @var string
	 */
	public $rescueEmail;
	/**
	 * The hz
	 * @var string
	 */
	public $hz;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string kernel
	 * @param string cpufamily
	 * @param boolean grsec
	 * @param boolean smp
	 * @param boolean ipv6
	 * @param string root
	 * @param string rescueEmail
	 * @param string hz
	 * @return OvhTypeDedicatedNetbootModify
	 */
	public function __construct($_session = null,$_hostname = null,$_kernel = null,$_cpufamily = null,$_grsec = null,$_smp = null,$_ipv6 = null,$_root = null,$_rescueEmail = null,$_hz = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'kernel'=>$_kernel,'cpufamily'=>$_cpufamily,'grsec'=>$_grsec,'smp'=>$_smp,'ipv6'=>$_ipv6,'root'=>$_root,'rescueEmail'=>$_rescueEmail,'hz'=>$_hz));
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
	 * Set kernel
	 * @param string kernel
	 * @return string
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get kernel
	 * @return string
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set cpufamily
	 * @param string cpufamily
	 * @return string
	 */
	public function setCpufamily($_cpufamily)
	{
		return ($this->cpufamily = $_cpufamily);
	}
	/**
	 * Get cpufamily
	 * @return string
	 */
	public function getCpufamily()
	{
		return $this->cpufamily;
	}
	/**
	 * Set grsec
	 * @param boolean grsec
	 * @return boolean
	 */
	public function setGrsec($_grsec)
	{
		return ($this->grsec = $_grsec);
	}
	/**
	 * Get grsec
	 * @return boolean
	 */
	public function getGrsec()
	{
		return $this->grsec;
	}
	/**
	 * Set smp
	 * @param boolean smp
	 * @return boolean
	 */
	public function setSmp($_smp)
	{
		return ($this->smp = $_smp);
	}
	/**
	 * Get smp
	 * @return boolean
	 */
	public function getSmp()
	{
		return $this->smp;
	}
	/**
	 * Set ipv6
	 * @param boolean ipv6
	 * @return boolean
	 */
	public function setIpv6($_ipv6)
	{
		return ($this->ipv6 = $_ipv6);
	}
	/**
	 * Get ipv6
	 * @return boolean
	 */
	public function getIpv6()
	{
		return $this->ipv6;
	}
	/**
	 * Set root
	 * @param string root
	 * @return string
	 */
	public function setRoot($_root)
	{
		return ($this->root = $_root);
	}
	/**
	 * Get root
	 * @return string
	 */
	public function getRoot()
	{
		return $this->root;
	}
	/**
	 * Set rescueEmail
	 * @param string rescueEmail
	 * @return string
	 */
	public function setRescueEmail($_rescueEmail)
	{
		return ($this->rescueEmail = $_rescueEmail);
	}
	/**
	 * Get rescueEmail
	 * @return string
	 */
	public function getRescueEmail()
	{
		return $this->rescueEmail;
	}
	/**
	 * Set hz
	 * @param string hz
	 * @return string
	 */
	public function setHz($_hz)
	{
		return ($this->hz = $_hz);
	}
	/**
	 * Get hz
	 * @return string
	 */
	public function getHz()
	{
		return $this->hz;
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