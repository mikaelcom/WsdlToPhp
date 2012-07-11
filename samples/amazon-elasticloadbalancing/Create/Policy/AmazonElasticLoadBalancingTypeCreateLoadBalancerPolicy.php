<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer for which the policy is being created. This name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The PolicyName
	 * Meta informations :
	 * 	- documentation : <p> The name of the LoadBalancer policy being created. The name must be unique within the set of policies for this LoadBalancer. </p>
	 * @var string
	 */
	public $PolicyName;
	/**
	 * The PolicyTypeName
	 * Meta informations :
	 * 	- documentation : <p> The name of the base policy type being used to create this policy. To get the list of policy types, use the <a>DescribeLoadBalancerPolicyTypes</a> action. </p>
	 * @var string
	 */
	public $PolicyTypeName;
	/**
	 * The PolicyAttributes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of attributes associated with the policy being created. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyAttributes
	 */
	public $PolicyAttributes;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param string PolicyName
	 * @param string PolicyTypeName
	 * @param AmazonElasticLoadBalancingTypePolicyAttributes PolicyAttributes
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy
	 */
	public function __construct($_LoadBalancerName = null,$_PolicyName = null,$_PolicyTypeName = null,$_PolicyAttributes = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'PolicyName'=>$_PolicyName,'PolicyTypeName'=>$_PolicyTypeName,'PolicyAttributes'=>$_PolicyAttributes));
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
	 * Set PolicyName
	 * @param string PolicyName
	 * @return string
	 */
	public function setPolicyName($_PolicyName)
	{
		return ($this->PolicyName = $_PolicyName);
	}
	/**
	 * Get PolicyName
	 * @return string
	 */
	public function getPolicyName()
	{
		return $this->PolicyName;
	}
	/**
	 * Set PolicyTypeName
	 * @param string PolicyTypeName
	 * @return string
	 */
	public function setPolicyTypeName($_PolicyTypeName)
	{
		return ($this->PolicyTypeName = $_PolicyTypeName);
	}
	/**
	 * Get PolicyTypeName
	 * @return string
	 */
	public function getPolicyTypeName()
	{
		return $this->PolicyTypeName;
	}
	/**
	 * Set PolicyAttributes
	 * @param PolicyAttributes PolicyAttributes
	 * @return PolicyAttributes
	 */
	public function setPolicyAttributes($_PolicyAttributes)
	{
		return ($this->PolicyAttributes = $_PolicyAttributes);
	}
	/**
	 * Get PolicyAttributes
	 * @return AmazonElasticLoadBalancingTypePolicyAttributes
	 */
	public function getPolicyAttributes()
	{
		return $this->PolicyAttributes;
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