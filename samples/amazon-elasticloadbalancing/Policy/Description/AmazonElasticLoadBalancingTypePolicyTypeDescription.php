<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyTypeDescription
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyTypeDescription
 * Documentation : <p> The <a>PolicyTypeDescription</a> data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyTypeDescription extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The PolicyTypeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The name of the policy type. </p>
	 * @var string
	 */
	public $PolicyTypeName;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A human-readable description of the policy type. </p>
	 * @var string
	 */
	public $Description;
	/**
	 * The PolicyAttributeTypeDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The description of the policy attributes associated with the LoadBalancer policies defined by the Elastic Load Balancing service. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyAttributeTypeDescriptions
	 */
	public $PolicyAttributeTypeDescriptions;
	/**
	 * Constructor
	 * @param string PolicyTypeName
	 * @param string Description
	 * @param AmazonElasticLoadBalancingTypePolicyAttributeTypeDescriptions PolicyAttributeTypeDescriptions
	 * @return AmazonElasticLoadBalancingTypePolicyTypeDescription
	 */
	public function __construct($_PolicyTypeName = null,$_Description = null,$_PolicyAttributeTypeDescriptions = null)
	{
		parent::__construct(array('PolicyTypeName'=>$_PolicyTypeName,'Description'=>$_Description,'PolicyAttributeTypeDescriptions'=>$_PolicyAttributeTypeDescriptions));
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set PolicyAttributeTypeDescriptions
	 * @param PolicyAttributeTypeDescriptions PolicyAttributeTypeDescriptions
	 * @return PolicyAttributeTypeDescriptions
	 */
	public function setPolicyAttributeTypeDescriptions($_PolicyAttributeTypeDescriptions)
	{
		return ($this->PolicyAttributeTypeDescriptions = $_PolicyAttributeTypeDescriptions);
	}
	/**
	 * Get PolicyAttributeTypeDescriptions
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeTypeDescriptions
	 */
	public function getPolicyAttributeTypeDescriptions()
	{
		return $this->PolicyAttributeTypeDescriptions;
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