<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The PolicyDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of policy description structures. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyDescriptions
	 */
	public $PolicyDescriptions;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyDescriptions PolicyDescriptions
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResult
	 */
	public function __construct($_PolicyDescriptions = null)
	{
		parent::__construct(array('PolicyDescriptions'=>$_PolicyDescriptions));
	}
	/**
	 * Set PolicyDescriptions
	 * @param PolicyDescriptions PolicyDescriptions
	 * @return PolicyDescriptions
	 */
	public function setPolicyDescriptions($_PolicyDescriptions)
	{
		return ($this->PolicyDescriptions = $_PolicyDescriptions);
	}
	/**
	 * Get PolicyDescriptions
	 * @return AmazonElasticLoadBalancingTypePolicyDescriptions
	 */
	public function getPolicyDescriptions()
	{
		return $this->PolicyDescriptions;
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