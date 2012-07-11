<?php
/**
 * Class file for OvhTypeDedicatedNetbootStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetbootStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetbootStruct extends OvhWsdlClass
{
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
	 * The root
	 * @var string
	 */
	public $root;
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
	 * The grsec
	 * @var boolean
	 */
	public $grsec;
	/**
	 * The hz
	 * @var string
	 */
	public $hz;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string kernel
	 * @param string cpufamily
	 * @param string root
	 * @param boolean smp
	 * @param boolean ipv6
	 * @param boolean grsec
	 * @param string hz
	 * @param int id
	 * @param string state
	 * @return OvhTypeDedicatedNetbootStruct
	 */
	public function __construct($_kernel = null,$_cpufamily = null,$_root = null,$_smp = null,$_ipv6 = null,$_grsec = null,$_hz = null,$_id = null,$_state = null)
	{
		parent::__construct(array('kernel'=>$_kernel,'cpufamily'=>$_cpufamily,'root'=>$_root,'smp'=>$_smp,'ipv6'=>$_ipv6,'grsec'=>$_grsec,'hz'=>$_hz,'id'=>$_id,'state'=>$_state));
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
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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