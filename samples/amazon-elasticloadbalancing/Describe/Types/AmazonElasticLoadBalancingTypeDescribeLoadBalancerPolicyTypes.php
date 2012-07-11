<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The PolicyTypeNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Specifies the name of the policy types. If no names are specified, returns the description of all the policy types defined by Elastic Load Balancing service. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyTypeNames
	 */
	public $PolicyTypeNames;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyTypeNames PolicyTypeNames
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes
	 */
	public function __construct($_PolicyTypeNames = null)
	{
		parent::__construct(array('PolicyTypeNames'=>$_PolicyTypeNames));
	}
	/**
	 * Set PolicyTypeNames
	 * @param PolicyTypeNames PolicyTypeNames
	 * @return PolicyTypeNames
	 */
	public function setPolicyTypeNames($_PolicyTypeNames)
	{
		return ($this->PolicyTypeNames = $_PolicyTypeNames);
	}
	/**
	 * Get PolicyTypeNames
	 * @return AmazonElasticLoadBalancingTypePolicyTypeNames
	 */
	public function getPolicyTypeNames()
	{
		return $this->PolicyTypeNames;
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