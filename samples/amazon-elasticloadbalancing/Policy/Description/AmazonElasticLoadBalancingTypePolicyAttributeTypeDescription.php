<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyAttributeTypeDescription
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyAttributeTypeDescription
 * Documentation : <p> The <code>PolicyAttributeTypeDescription</code> data type. This data type is used to describe values that are acceptable for the policy attribute. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyAttributeTypeDescription extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The AttributeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The name of the attribute associated with the policy type. </p>
	 * @var string
	 */
	public $AttributeName;
	/**
	 * The AttributeType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The type of attribute. For example, Boolean, Integer, etc. </p>
	 * @var string
	 */
	public $AttributeType;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A human-readable description of the attribute. </p>
	 * @var string
	 */
	public $Description;
	/**
	 * The DefaultValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The default value of the attribute, if applicable. </p>
	 * @var string
	 */
	public $DefaultValue;
	/**
	 * The Cardinality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The cardinality of the attribute. Valid Values: <ul> <li>ONE(1) : Single value required</li> <li>ZERO_OR_ONE(0..1) : Up to one value can be supplied</li> <li>ZERO_OR_MORE(0..*) : Optional. Multiple values are allowed</li> <li>ONE_OR_MORE(1..*0) : Required. Multiple values are allowed</li> </ul> </p>
	 * @var string
	 */
	public $Cardinality;
	/**
	 * Constructor
	 * @param string AttributeName
	 * @param string AttributeType
	 * @param string Description
	 * @param string DefaultValue
	 * @param string Cardinality
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeTypeDescription
	 */
	public function __construct($_AttributeName = null,$_AttributeType = null,$_Description = null,$_DefaultValue = null,$_Cardinality = null)
	{
		parent::__construct(array('AttributeName'=>$_AttributeName,'AttributeType'=>$_AttributeType,'Description'=>$_Description,'DefaultValue'=>$_DefaultValue,'Cardinality'=>$_Cardinality));
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
	 * Set AttributeType
	 * @param string AttributeType
	 * @return string
	 */
	public function setAttributeType($_AttributeType)
	{
		return ($this->AttributeType = $_AttributeType);
	}
	/**
	 * Get AttributeType
	 * @return string
	 */
	public function getAttributeType()
	{
		return $this->AttributeType;
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
	 * Set DefaultValue
	 * @param string DefaultValue
	 * @return string
	 */
	public function setDefaultValue($_DefaultValue)
	{
		return ($this->DefaultValue = $_DefaultValue);
	}
	/**
	 * Get DefaultValue
	 * @return string
	 */
	public function getDefaultValue()
	{
		return $this->DefaultValue;
	}
	/**
	 * Set Cardinality
	 * @param string Cardinality
	 * @return string
	 */
	public function setCardinality($_Cardinality)
	{
		return ($this->Cardinality = $_Cardinality);
	}
	/**
	 * Get Cardinality
	 * @return string
	 */
	public function getCardinality()
	{
		return $this->Cardinality;
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