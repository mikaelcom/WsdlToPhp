<?php
/**
 * Class file for PayPalTypeListOfAttributeSetType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeListOfAttributeSetType
 * @date 14/07/2012
 */
class PayPalTypeListOfAttributeSetType extends PayPalWsdlClass
{
	/**
	 * The AttributeSet
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeAttributeSetType
	 */
	public $AttributeSet;
	/**
	 * Constructor
	 * @param PayPalTypeAttributeSetType AttributeSet
	 * @return PayPalTypeListOfAttributeSetType
	 */
	public function __construct($_AttributeSet = null)
	{
		parent::__construct(array('AttributeSet'=>$_AttributeSet));
	}
	/**
	 * Set AttributeSet
	 * @param AttributeSetType AttributeSet
	 * @return AttributeSetType
	 */
	public function setAttributeSet($_AttributeSet)
	{
		return ($this->AttributeSet = $_AttributeSet);
	}
	/**
	 * Get AttributeSet
	 * @return PayPalTypeAttributeSetType
	 */
	public function getAttributeSet()
	{
		return $this->AttributeSet;
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