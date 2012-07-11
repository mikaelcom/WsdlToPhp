<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer to be detached. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The Subnets
	 * Meta informations :
	 * 	- documentation : <p> A list of subnet IDs to remove from the set of configured subnets for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeSubnets
	 */
	public $Subnets;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeSubnets Subnets
	 * @return AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets
	 */
	public function __construct($_LoadBalancerName = null,$_Subnets = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'Subnets'=>$_Subnets));
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
	 * Set Subnets
	 * @param Subnets Subnets
	 * @return Subnets
	 */
	public function setSubnets($_Subnets)
	{
		return ($this->Subnets = $_Subnets);
	}
	/**
	 * Get Subnets
	 * @return AmazonElasticLoadBalancingTypeSubnets
	 */
	public function getSubnets()
	{
		return $this->Subnets;
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