<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The SecurityGroups
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of security group IDs associated with your LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeSecurityGroups
	 */
	public $SecurityGroups;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeSecurityGroups SecurityGroups
	 * @return AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResult
	 */
	public function __construct($_SecurityGroups = null)
	{
		parent::__construct(array('SecurityGroups'=>$_SecurityGroups));
	}
	/**
	 * Set SecurityGroups
	 * @param SecurityGroups SecurityGroups
	 * @return SecurityGroups
	 */
	public function setSecurityGroups($_SecurityGroups)
	{
		return ($this->SecurityGroups = $_SecurityGroups);
	}
	/**
	 * Get SecurityGroups
	 * @return AmazonElasticLoadBalancingTypeSecurityGroups
	 */
	public function getSecurityGroups()
	{
		return $this->SecurityGroups;
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