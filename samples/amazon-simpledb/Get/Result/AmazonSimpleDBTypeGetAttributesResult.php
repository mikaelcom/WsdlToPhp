<?php
/**
 * Class file for AmazonSimpleDBTypeGetAttributesResult
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBTypeGetAttributesResult
 * @date 10/07/2012
 */
class AmazonSimpleDBTypeGetAttributesResult extends AmazonSimpleDBWsdlClass
{
	/**
	 * The Attribute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonSimpleDBTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param AmazonSimpleDBTypeAttribute Attribute
	 * @return AmazonSimpleDBTypeGetAttributesResult
	 */
	public function __construct($_Attribute = null)
	{
		parent::__construct(array('Attribute'=>$_Attribute));
	}
	/**
	 * Set Attribute
	 * @param Attribute Attribute
	 * @return Attribute
	 */
	public function setAttribute($_Attribute)
	{
		return ($this->Attribute = $_Attribute);
	}
	/**
	 * Get Attribute
	 * @return AmazonSimpleDBTypeAttribute
	 */
	public function getAttribute()
	{
		return $this->Attribute;
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