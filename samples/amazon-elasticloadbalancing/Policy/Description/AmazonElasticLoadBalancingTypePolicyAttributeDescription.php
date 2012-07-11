<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyAttributeDescription
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyAttributeDescription
 * Documentation : <p> The <code>PolicyAttributeDescription</code> data type. This data type is used to describe the attributes and values associated with a policy. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyAttributeDescription extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The AttributeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The name of the attribute associated with the policy. </p>
	 * @var string
	 */
	public $AttributeName;
	/**
	 * The AttributeValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The value of the attribute associated with the policy. </p>
	 * @var string
	 */
	public $AttributeValue;
	/**
	 * Constructor
	 * @param string AttributeName
	 * @param string AttributeValue
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeDescription
	 */
	public function __construct($_AttributeName = null,$_AttributeValue = null)
	{
		parent::__construct(array('AttributeName'=>$_AttributeName,'AttributeValue'=>$_AttributeValue));
	}
	/**
	 * Set AttributeName
	 * @param string AttributeName
	 * @return string
	 */
	public function setAttributeName($_AttributeName)
	{
		return ($this->AttributeName = $_AttributeName);
	}
	/**
	 * Get AttributeName
	 * @return string
	 */
	public function getAttributeName()
	{
		return $this->AttributeName;
	}
	/**
	 * Set AttributeValue
	 * @param string AttributeValue
	 * @return string
	 */
	public function setAttributeValue($_AttributeValue)
	{
		return ($this->AttributeValue = $_AttributeValue);
	}
	/**
	 * Get AttributeValue
	 * @return string
	 */
	public function getAttributeValue()
	{
		return $this->AttributeValue;
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