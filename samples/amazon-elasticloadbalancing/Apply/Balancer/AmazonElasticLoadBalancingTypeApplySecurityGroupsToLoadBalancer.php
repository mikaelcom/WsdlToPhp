<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The SecurityGroups
	 * Meta informations :
	 * 	- documentation : <p> A list of security group IDs to associate with your LoadBalancer in VPC. The security group IDs must be provided as the ID and not the security group name (For example, sg-1234). </p>
	 * @var AmazonElasticLoadBalancingTypeSecurityGroups
	 */
	public $SecurityGroups;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeSecurityGroups SecurityGroups
	 * @return AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer
	 */
	public function __construct($_LoadBalancerName = null,$_SecurityGroups = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'SecurityGroups'=>$_SecurityGroups));
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