<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The mnemonic name associated with the LoadBalancer. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The LoadBalancerPorts
	 * Meta informations :
	 * 	- documentation : <p> The client port number(s) of the LoadBalancerListener(s) to be removed. </p>
	 * @var AmazonElasticLoadBalancingTypePorts
	 */
	public $LoadBalancerPorts;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypePorts LoadBalancerPorts
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners
	 */
	public function __construct($_LoadBalancerName = null,$_LoadBalancerPorts = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'LoadBalancerPorts'=>$_LoadBalancerPorts));
	}
	/**
	 * Set LoadBalancerName
	 * @param string LoadBalancerName
	 * @return string
	 */
	public function setLoadBalancerName($_LoadBalancerName)
	{
		return ($this->LoadBalancerName = $_LoadBalancerName);
	}
	/**
	 * Get LoadBalancerName
	 * @return string
	 */
	public function getLoadBalancerName()
	{
		return $this->LoadBalancerName;
	}
	/**
	 * Set LoadBalancerPorts
	 * @param Ports LoadBalancerPorts
	 * @return Ports
	 */
	public function setLoadBalancerPorts($_LoadBalancerPorts)
	{
		return ($this->LoadBalancerPorts = $_LoadBalancerPorts);
	}
	/**
	 * Get LoadBalancerPorts
	 * @return AmazonElasticLoadBalancingTypePorts
	 */
	public function getLoadBalancerPorts()
	{
		return $this->LoadBalancerPorts;
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