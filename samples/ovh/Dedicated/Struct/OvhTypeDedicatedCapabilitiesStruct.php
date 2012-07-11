<?php
/**
 * Class file for OvhTypeDedicatedCapabilitiesStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedCapabilitiesStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedCapabilitiesStruct extends OvhWsdlClass
{
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The originalClassicFailover
	 * @var int
	 */
	public $originalClassicFailover;
	/**
	 * The originalFailoverRipe
	 * @var int
	 */
	public $originalFailoverRipe;
	/**
	 * The originalLoadBalancingSlot
	 * @var int
	 */
	public $originalLoadBalancingSlot;
	/**
	 * The additionalClassicFailover
	 * @var int
	 */
	public $additionalClassicFailover;
	/**
	 * The additionalFailoverRipe
	 * @var int
	 */
	public $additionalFailoverRipe;
	/**
	 * The usedClassicFailover
	 * @var int
	 */
	public $usedClassicFailover;
	/**
	 * The usedFailoverRipe
	 * @var int
	 */
	public $usedFailoverRipe;
	/**
	 * Constructor
	 * @param string hostname
	 * @param int originalClassicFailover
	 * @param int originalFailoverRipe
	 * @param int originalLoadBalancingSlot
	 * @param int additionalClassicFailover
	 * @param int additionalFailoverRipe
	 * @param int usedClassicFailover
	 * @param int usedFailoverRipe
	 * @return OvhTypeDedicatedCapabilitiesStruct
	 */
	public function __construct($_hostname = null,$_originalClassicFailover = null,$_originalFailoverRipe = null,$_originalLoadBalancingSlot = null,$_additionalClassicFailover = null,$_additionalFailoverRipe = null,$_usedClassicFailover = null,$_usedFailoverRipe = null)
	{
		parent::__construct(array('hostname'=>$_hostname,'originalClassicFailover'=>$_originalClassicFailover,'originalFailoverRipe'=>$_originalFailoverRipe,'originalLoadBalancingSlot'=>$_originalLoadBalancingSlot,'additionalClassicFailover'=>$_additionalClassicFailover,'additionalFailoverRipe'=>$_additionalFailoverRipe,'usedClassicFailover'=>$_usedClassicFailover,'usedFailoverRipe'=>$_usedFailoverRipe));
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
	 * Set originalClassicFailover
	 * @param int originalClassicFailover
	 * @return int
	 */
	public function setOriginalClassicFailover($_originalClassicFailover)
	{
		return ($this->originalClassicFailover = $_originalClassicFailover);
	}
	/**
	 * Get originalClassicFailover
	 * @return int
	 */
	public function getOriginalClassicFailover()
	{
		return $this->originalClassicFailover;
	}
	/**
	 * Set originalFailoverRipe
	 * @param int originalFailoverRipe
	 * @return int
	 */
	public function setOriginalFailoverRipe($_originalFailoverRipe)
	{
		return ($this->originalFailoverRipe = $_originalFailoverRipe);
	}
	/**
	 * Get originalFailoverRipe
	 * @return int
	 */
	public function getOriginalFailoverRipe()
	{
		return $this->originalFailoverRipe;
	}
	/**
	 * Set originalLoadBalancingSlot
	 * @param int originalLoadBalancingSlot
	 * @return int
	 */
	public function setOriginalLoadBalancingSlot($_originalLoadBalancingSlot)
	{
		return ($this->originalLoadBalancingSlot = $_originalLoadBalancingSlot);
	}
	/**
	 * Get originalLoadBalancingSlot
	 * @return int
	 */
	public function getOriginalLoadBalancingSlot()
	{
		return $this->originalLoadBalancingSlot;
	}
	/**
	 * Set additionalClassicFailover
	 * @param int additionalClassicFailover
	 * @return int
	 */
	public function setAdditionalClassicFailover($_additionalClassicFailover)
	{
		return ($this->additionalClassicFailover = $_additionalClassicFailover);
	}
	/**
	 * Get additionalClassicFailover
	 * @return int
	 */
	public function getAdditionalClassicFailover()
	{
		return $this->additionalClassicFailover;
	}
	/**
	 * Set additionalFailoverRipe
	 * @param int additionalFailoverRipe
	 * @return int
	 */
	public function setAdditionalFailoverRipe($_additionalFailoverRipe)
	{
		return ($this->additionalFailoverRipe = $_additionalFailoverRipe);
	}
	/**
	 * Get additionalFailoverRipe
	 * @return int
	 */
	public function getAdditionalFailoverRipe()
	{
		return $this->additionalFailoverRipe;
	}
	/**
	 * Set usedClassicFailover
	 * @param int usedClassicFailover
	 * @return int
	 */
	public function setUsedClassicFailover($_usedClassicFailover)
	{
		return ($this->usedClassicFailover = $_usedClassicFailover);
	}
	/**
	 * Get usedClassicFailover
	 * @return int
	 */
	public function getUsedClassicFailover()
	{
		return $this->usedClassicFailover;
	}
	/**
	 * Set usedFailoverRipe
	 * @param int usedFailoverRipe
	 * @return int
	 */
	public function setUsedFailoverRipe($_usedFailoverRipe)
	{
		return ($this->usedFailoverRipe = $_usedFailoverRipe);
	}
	/**
	 * Get usedFailoverRipe
	 * @return int
	 */
	public function getUsedFailoverRipe()
	{
		return $this->usedFailoverRipe;
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