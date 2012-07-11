<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The PolicyTypeDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> List of policy type description structures of the specified policy type. If no policy type names are specified, returns the description of all the policy types defined by Elastic Load Balancing service. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyTypeDescriptions
	 */
	public $PolicyTypeDescriptions;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyTypeDescriptions PolicyTypeDescriptions
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResult
	 */
	public function __construct($_PolicyTypeDescriptions = null)
	{
		parent::__construct(array('PolicyTypeDescriptions'=>$_PolicyTypeDescriptions));
	}
	/**
	 * Set PolicyTypeDescriptions
	 * @param PolicyTypeDescriptions PolicyTypeDescriptions
	 * @return PolicyTypeDescriptions
	 */
	public function setPolicyTypeDescriptions($_PolicyTypeDescriptions)
	{
		return ($this->PolicyTypeDescriptions = $_PolicyTypeDescriptions);
	}
	/**
	 * Get PolicyTypeDescriptions
	 * @return AmazonElasticLoadBalancingTypePolicyTypeDescriptions
	 */
	public function getPolicyTypeDescriptions()
	{
		return $this->PolicyTypeDescriptions;
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