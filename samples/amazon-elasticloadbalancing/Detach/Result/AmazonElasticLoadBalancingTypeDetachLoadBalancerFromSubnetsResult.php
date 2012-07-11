<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The Subnets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of subnet IDs removed from the configured set of subnets for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeSubnets
	 */
	public $Subnets;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeSubnets Subnets
	 * @return AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResult
	 */
	public function __construct($_Subnets = null)
	{
		parent::__construct(array('Subnets'=>$_Subnets));
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