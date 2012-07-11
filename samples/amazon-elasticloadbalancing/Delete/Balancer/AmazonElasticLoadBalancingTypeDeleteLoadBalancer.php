<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeleteLoadBalancer
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeleteLoadBalancer
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeleteLoadBalancer extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancer
	 */
	public function __construct($_LoadBalancerName = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>