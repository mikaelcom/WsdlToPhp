<?php
/**
 * Class file for OvhTypeDedicatedInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInfoReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedInfoReturn extends OvhWsdlClass
{
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The datacenter
	 * @var string
	 */
	public $datacenter;
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * The isKimSufi
	 * @var boolean
	 */
	public $isKimSufi;
	/**
	 * The isRPS
	 * @var boolean
	 */
	public $isRPS;
	/**
	 * The isHG
	 * @var boolean
	 */
	public $isHG;
	/**
	 * The num
	 * @var int
	 */
	public $num;
	/**
	 * The rack
	 * @var string
	 */
	public $rack;
	/**
	 * The countryBilling
	 * @var string
	 */
	public $countryBilling;
	/**
	 * The network
	 * @var OvhTypeDedicatedNetworkStruct
	 */
	public $network;
	/**
	 * The capability
	 * @var OvhTypeDedicatedCapabilityStruct
	 */
	public $capability;
	/**
	 * The freeDom
	 * @var OvhTypeDedicatedFreedomStruct
	 */
	public $freeDom;
	/**
	 * Constructor
	 * @param string hostname
	 * @param string datacenter
	 * @param string os
	 * @param boolean isKimSufi
	 * @param boolean isRPS
	 * @param boolean isHG
	 * @param int num
	 * @param string rack
	 * @param string countryBilling
	 * @param OvhTypeDedicatedNetworkStruct network
	 * @param OvhTypeDedicatedCapabilityStruct capability
	 * @param OvhTypeDedicatedFreedomStruct freeDom
	 * @return OvhTypeDedicatedInfoReturn
	 */
	public function __construct($_hostname = null,$_datacenter = null,$_os = null,$_isKimSufi = null,$_isRPS = null,$_isHG = null,$_num = null,$_rack = null,$_countryBilling = null,$_network = null,$_capability = null,$_freeDom = null)
	{
		parent::__construct(array('hostname'=>$_hostname,'datacenter'=>$_datacenter,'os'=>$_os,'isKimSufi'=>$_isKimSufi,'isRPS'=>$_isRPS,'isHG'=>$_isHG,'num'=>$_num,'rack'=>$_rack,'countryBilling'=>$_countryBilling,'network'=>$_network,'capability'=>$_capability,'freeDom'=>$_freeDom));
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
	 * Set datacenter
	 * @param string datacenter
	 * @return string
	 */
	public function setDatacenter($_datacenter)
	{
		return ($this->datacenter = $_datacenter);
	}
	/**
	 * Get datacenter
	 * @return string
	 */
	public function getDatacenter()
	{
		return $this->datacenter;
	}
	/**
	 * Set os
	 * @param string os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get os
	 * @return string
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set isKimSufi
	 * @param boolean isKimSufi
	 * @return boolean
	 */
	public function setIsKimSufi($_isKimSufi)
	{
		return ($this->isKimSufi = $_isKimSufi);
	}
	/**
	 * Get isKimSufi
	 * @return boolean
	 */
	public function getIsKimSufi()
	{
		return $this->isKimSufi;
	}
	/**
	 * Set isRPS
	 * @param boolean isRPS
	 * @return boolean
	 */
	public function setIsRPS($_isRPS)
	{
		return ($this->isRPS = $_isRPS);
	}
	/**
	 * Get isRPS
	 * @return boolean
	 */
	public function getIsRPS()
	{
		return $this->isRPS;
	}
	/**
	 * Set isHG
	 * @param boolean isHG
	 * @return boolean
	 */
	public function setIsHG($_isHG)
	{
		return ($this->isHG = $_isHG);
	}
	/**
	 * Get isHG
	 * @return boolean
	 */
	public function getIsHG()
	{
		return $this->isHG;
	}
	/**
	 * Set num
	 * @param int num
	 * @return int
	 */
	public function setNum($_num)
	{
		return ($this->num = $_num);
	}
	/**
	 * Get num
	 * @return int
	 */
	public function getNum()
	{
		return $this->num;
	}
	/**
	 * Set rack
	 * @param string rack
	 * @return string
	 */
	public function setRack($_rack)
	{
		return ($this->rack = $_rack);
	}
	/**
	 * Get rack
	 * @return string
	 */
	public function getRack()
	{
		return $this->rack;
	}
	/**
	 * Set countryBilling
	 * @param string countryBilling
	 * @return string
	 */
	public function setCountryBilling($_countryBilling)
	{
		return ($this->countryBilling = $_countryBilling);
	}
	/**
	 * Get countryBilling
	 * @return string
	 */
	public function getCountryBilling()
	{
		return $this->countryBilling;
	}
	/**
	 * Set network
	 * @param dedicatedNetworkStruct network
	 * @return dedicatedNetworkStruct
	 */
	public function setNetwork($_network)
	{
		return ($this->network = $_network);
	}
	/**
	 * Get network
	 * @return OvhTypededicatedNetworkStruct
	 */
	public function getNetwork()
	{
		return $this->network;
	}
	/**
	 * Set capability
	 * @param dedicatedCapabilityStruct capability
	 * @return dedicatedCapabilityStruct
	 */
	public function setCapability($_capability)
	{
		return ($this->capability = $_capability);
	}
	/**
	 * Get capability
	 * @return OvhTypededicatedCapabilityStruct
	 */
	public function getCapability()
	{
		return $this->capability;
	}
	/**
	 * Set freeDom
	 * @param dedicatedFreedomStruct freeDom
	 * @return dedicatedFreedomStruct
	 */
	public function setFreeDom($_freeDom)
	{
		return ($this->freeDom = $_freeDom);
	}
	/**
	 * Get freeDom
	 * @return OvhTypededicatedFreedomStruct
	 */
	public function getFreeDom()
	{
		return $this->freeDom;
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