<?php
/**
 * Class file for OvhTypeDedicatedRipeGetIpStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRipeGetIpStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedRipeGetIpStruct extends OvhWsdlClass
{
	/**
	 * The exclusion
	 * @var string
	 */
	public $exclusion;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * Constructor
	 * @param string exclusion
	 * @param string routedTo
	 * @param string ip
	 * @param string netname
	 * @return OvhTypeDedicatedRipeGetIpStruct
	 */
	public function __construct($_exclusion = null,$_routedTo = null,$_ip = null,$_netname = null)
	{
		parent::__construct(array('exclusion'=>$_exclusion,'routedTo'=>$_routedTo,'ip'=>$_ip,'netname'=>$_netname));
	}
	/**
	 * Set exclusion
	 * @param string exclusion
	 * @return string
	 */
	public function setExclusion($_exclusion)
	{
		return ($this->exclusion = $_exclusion);
	}
	/**
	 * Get exclusion
	 * @return string
	 */
	public function getExclusion()
	{
		return $this->exclusion;
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
	 * Set netname
	 * @param string netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get netname
	 * @return string
	 */
	public function getNetname()
	{
		return $this->netname;
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