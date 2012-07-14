<?php
/**
 * Class file for PayPalTypeAttributeSetType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAttributeSetType
 * Documentation : AttributeSet.
 * @date 14/07/2012
 */
class PayPalTypeAttributeSetType extends PayPalWsdlClass
{
	/**
	 * The Attribute
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeAttributeType
	 */
	public $Attribute;
	/**
	 * The AttributeSetID
	 * @var string
	 */
	public $AttributeSetID;
	/**
	 * Constructor
	 * @param PayPalTypeAttributeType Attribute
	 * @param string AttributeSetID
	 * @return PayPalTypeAttributeSetType
	 */
	public function __construct($_Attribute = null,$_AttributeSetID = null)
	{
		parent::__construct(array('Attribute'=>$_Attribute,'AttributeSetID'=>$_AttributeSetID));
	}
	/**
	 * Set Attribute
	 * @param AttributeType Attribute
	 * @return AttributeType
	 */
	public function setAttribute($_Attribute)
	{
		return ($this->Attribute = $_Attribute);
	}
	/**
	 * Get Attribute
	 * @return PayPalTypeAttributeType
	 */
	public function getAttribute()
	{
		return $this->Attribute;
	}
	/**
	 * Set AttributeSetID
	 * @param string AttributeSetID
	 * @return string
	 */
	public function setAttributeSetID($_AttributeSetID)
	{
		return ($this->AttributeSetID = $_AttributeSetID);
	}
	/**
	 * Get AttributeSetID
	 * @return string
	 */
	public function getAttributeSetID()
	{
		return $this->AttributeSetID;
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