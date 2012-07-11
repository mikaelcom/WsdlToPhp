<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyDescription
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyDescription
 * Documentation : <p> The <code>PolicyDescription</code> data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyDescription extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The PolicyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The name mof the policy associated with the LoadBalancer. </p>
	 * @var string
	 */
	public $PolicyName;
	/**
	 * The PolicyTypeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The name of the policy type associated with the LoadBalancer. </p>
	 * @var string
	 */
	public $PolicyTypeName;
	/**
	 * The PolicyAttributeDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of policy attribute description structures. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyAttributeDescriptions
	 */
	public $PolicyAttributeDescriptions;
	/**
	 * Constructor
	 * @param string PolicyName
	 * @param string PolicyTypeName
	 * @param AmazonElasticLoadBalancingTypePolicyAttributeDescriptions PolicyAttributeDescriptions
	 * @return AmazonElasticLoadBalancingTypePolicyDescription
	 */
	public function __construct($_PolicyName = null,$_PolicyTypeName = null,$_PolicyAttributeDescriptions = null)
	{
		parent::__construct(array('PolicyName'=>$_PolicyName,'PolicyTypeName'=>$_PolicyTypeName,'PolicyAttributeDescriptions'=>$_PolicyAttributeDescriptions));
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
	 * Set PolicyAttributeDescriptions
	 * @param PolicyAttributeDescriptions PolicyAttributeDescriptions
	 * @return PolicyAttributeDescriptions
	 */
	public function setPolicyAttributeDescriptions($_PolicyAttributeDescriptions)
	{
		return ($this->PolicyAttributeDescriptions = $_PolicyAttributeDescriptions);
	}
	/**
	 * Get PolicyAttributeDescriptions
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeDescriptions
	 */
	public function getPolicyAttributeDescriptions()
	{
		return $this->PolicyAttributeDescriptions;
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