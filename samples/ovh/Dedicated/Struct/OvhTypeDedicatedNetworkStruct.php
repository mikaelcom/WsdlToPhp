<?php
/**
 * Class file for OvhTypeDedicatedNetworkStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetworkStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetworkStruct extends OvhWsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The priority
	 * @var string
	 */
	public $priority;
	/**
	 * The connexion
	 * @var string
	 */
	public $connexion;
	/**
	 * The bandwidth
	 * @var int
	 */
	public $bandwidth;
	/**
	 * The bandwidthOvhToOvh
	 * @var int
	 */
	public $bandwidthOvhToOvh;
	/**
	 * The bandwidthOvhToInternet
	 * @var int
	 */
	public $bandwidthOvhToInternet;
	/**
	 * The bandwidthInternetToOvh
	 * @var int
	 */
	public $bandwidthInternetToOvh;
	/**
	 * The over
	 * @var boolean
	 */
	public $over;
	/**
	 * The interfaces
	 * @var OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType
	 */
	public $interfaces;
	/**
	 * The traffic
	 * @var OvhTypeDedicatedNetworkTrafficStruct
	 */
	public $traffic;
	/**
	 * Constructor
	 * @param string type
	 * @param string priority
	 * @param string connexion
	 * @param int bandwidth
	 * @param int bandwidthOvhToOvh
	 * @param int bandwidthOvhToInternet
	 * @param int bandwidthInternetToOvh
	 * @param boolean over
	 * @param OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType interfaces
	 * @param OvhTypeDedicatedNetworkTrafficStruct traffic
	 * @return OvhTypeDedicatedNetworkStruct
	 */
	public function __construct($_type = null,$_priority = null,$_connexion = null,$_bandwidth = null,$_bandwidthOvhToOvh = null,$_bandwidthOvhToInternet = null,$_bandwidthInternetToOvh = null,$_over = null,$_interfaces = null,$_traffic = null)
	{
		parent::__construct(array('type'=>$_type,'priority'=>$_priority,'connexion'=>$_connexion,'bandwidth'=>$_bandwidth,'bandwidthOvhToOvh'=>$_bandwidthOvhToOvh,'bandwidthOvhToInternet'=>$_bandwidthOvhToInternet,'bandwidthInternetToOvh'=>$_bandwidthInternetToOvh,'over'=>$_over,'interfaces'=>new OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType($_interfaces),'traffic'=>$_traffic));
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
	 * Set priority
	 * @param string priority
	 * @return string
	 */
	public function setPriority($_priority)
	{
		return ($this->priority = $_priority);
	}
	/**
	 * Get priority
	 * @return string
	 */
	public function getPriority()
	{
		return $this->priority;
	}
	/**
	 * Set connexion
	 * @param string connexion
	 * @return string
	 */
	public function setConnexion($_connexion)
	{
		return ($this->connexion = $_connexion);
	}
	/**
	 * Get connexion
	 * @return string
	 */
	public function getConnexion()
	{
		return $this->connexion;
	}
	/**
	 * Set bandwidth
	 * @param int bandwidth
	 * @return int
	 */
	public function setBandwidth($_bandwidth)
	{
		return ($this->bandwidth = $_bandwidth);
	}
	/**
	 * Get bandwidth
	 * @return int
	 */
	public function getBandwidth()
	{
		return $this->bandwidth;
	}
	/**
	 * Set bandwidthOvhToOvh
	 * @param int bandwidthOvhToOvh
	 * @return int
	 */
	public function setBandwidthOvhToOvh($_bandwidthOvhToOvh)
	{
		return ($this->bandwidthOvhToOvh = $_bandwidthOvhToOvh);
	}
	/**
	 * Get bandwidthOvhToOvh
	 * @return int
	 */
	public function getBandwidthOvhToOvh()
	{
		return $this->bandwidthOvhToOvh;
	}
	/**
	 * Set bandwidthOvhToInternet
	 * @param int bandwidthOvhToInternet
	 * @return int
	 */
	public function setBandwidthOvhToInternet($_bandwidthOvhToInternet)
	{
		return ($this->bandwidthOvhToInternet = $_bandwidthOvhToInternet);
	}
	/**
	 * Get bandwidthOvhToInternet
	 * @return int
	 */
	public function getBandwidthOvhToInternet()
	{
		return $this->bandwidthOvhToInternet;
	}
	/**
	 * Set bandwidthInternetToOvh
	 * @param int bandwidthInternetToOvh
	 * @return int
	 */
	public function setBandwidthInternetToOvh($_bandwidthInternetToOvh)
	{
		return ($this->bandwidthInternetToOvh = $_bandwidthInternetToOvh);
	}
	/**
	 * Get bandwidthInternetToOvh
	 * @return int
	 */
	public function getBandwidthInternetToOvh()
	{
		return $this->bandwidthInternetToOvh;
	}
	/**
	 * Set over
	 * @param boolean over
	 * @return boolean
	 */
	public function setOver($_over)
	{
		return ($this->over = $_over);
	}
	/**
	 * Get over
	 * @return boolean
	 */
	public function getOver()
	{
		return $this->over;
	}
	/**
	 * Set interfaces
	 * @param MyArrayOfDedicatedNetworkInterfaceStructType interfaces
	 * @return MyArrayOfDedicatedNetworkInterfaceStructType
	 */
	public function setInterfaces($_interfaces)
	{
		return ($this->interfaces = $_interfaces);
	}
	/**
	 * Get interfaces
	 * @return OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType
	 */
	public function getInterfaces()
	{
		return $this->interfaces;
	}
	/**
	 * Set traffic
	 * @param dedicatedNetworkTrafficStruct traffic
	 * @return dedicatedNetworkTrafficStruct
	 */
	public function setTraffic($_traffic)
	{
		return ($this->traffic = $_traffic);
	}
	/**
	 * Get traffic
	 * @return OvhTypededicatedNetworkTrafficStruct
	 */
	public function getTraffic()
	{
		return $this->traffic;
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