<?php
/**
 * Class file for EbayTradingTypeAttributeArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAttributeArrayType
 * Documentation : Reserved for future use.
 * @date 04/07/2012
 */
class EbayTradingTypeAttributeArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Attribute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Only applicable to Half.com. Not applicable to eBay listings. You can revise this field for Half.com listings.
	 * @var EbayTradingTypeAttributeType
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param EbayTradingTypeAttributeType Attribute
	 * @return EbayTradingTypeAttributeArrayType
	 */
	public function __construct($_Attribute = null)
	{
		parent::__construct(array('Attribute'=>$_Attribute));
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
	 * @return EbayTradingTypeAttributeType
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