<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The mnemonic name associated with the LoadBalancer. If no name is specified, the operation returns the attributes of either all the sample policies pre-defined by Elastic Load Balancing or the specified sample polices. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The PolicyNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The names of LoadBalancer policies you've created or Elastic Load Balancing sample policy names. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyNames
	 */
	public $PolicyNames;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypePolicyNames PolicyNames
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies
	 */
	public function __construct($_LoadBalancerName = null,$_PolicyNames = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'PolicyNames'=>$_PolicyNames));
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
	 * Set PolicyNames
	 * @param PolicyNames PolicyNames
	 * @return PolicyNames
	 */
	public function setPolicyNames($_PolicyNames)
	{
		return ($this->PolicyNames = $_PolicyNames);
	}
	/**
	 * Get PolicyNames
	 * @return AmazonElasticLoadBalancingTypePolicyNames
	 */
	public function getPolicyNames()
	{
		return $this->PolicyNames;
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