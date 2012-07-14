<?php
/**
 * Class file for PayPalTypeAttributeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAttributeType
 * Documentation : Constant name of the attribute that identifies a physical attribute within a set of characteristics that describe something in a formalised way.
 * @date 14/07/2012
 */
class PayPalTypeAttributeType extends PayPalWsdlClass
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- documentation : ValueList of the Attribute being described by the AttributeID.
	 * @var PayPalTypeValType
	 */
	public $Value;
	/**
	 * The AttributeID
	 * @var string
	 */
	public $AttributeID;
	/**
	 * Constructor
	 * @param PayPalTypeValType Value
	 * @param string AttributeID
	 * @return PayPalTypeAttributeType
	 */
	public function __construct($_Value = null,$_AttributeID = null)
	{
		parent::__construct(array('Value'=>$_Value,'AttributeID'=>$_AttributeID));
	}
	/**
	 * Set Value
	 * @param ValType Value
	 * @return ValType
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return PayPalTypeValType
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set AttributeID
	 * @param string AttributeID
	 * @return string
	 */
	public function setAttributeID($_AttributeID)
	{
		return ($this->AttributeID = $_AttributeID);
	}
	/**
	 * Get AttributeID
	 * @return string
	 */
	public function getAttributeID()
	{
		return $this->AttributeID;
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