<?php
/**
 * Class file for EbayTradingTypeAttributeSetArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAttributeSetArrayType
 * Documentation : Applicable for listings that include eBay's Item Specifics or Pre-filled Item Information features. A list of attribute sets. An attribute set contains a list of attributes that describe category-specific aspects or features of an item in a standardized way. See the Developer's Guide for more information. In item-listing requests, this property is required if attributes are identified as required in the characteristics set meta-data. See the Developer's Guide for information about characteristics meta-data and how to determine when attributes are required.
 * @date 04/07/2012
 */
class EbayTradingTypeAttributeSetArrayType extends EbayTradingWsdlClass
{
	/**
	 * The AttributeSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a list of attributes that describe category-specific aspects or features of an item in a standardized way.<br><br> For the AddItem family of calls and GetItem, an AttributeSetArray can contain a maximum of 2 full attribute sets (one for each category in which the item is listed) if the primary and secondary categories are mapped to different characteristic sets. If they are mapped to the same characteristic set, the AttributeSetArray can contain one full attribute set.<br> <br> An AttributeSetArray can also contain any number of additional site-wide attribute sets. In item-listing requests, AttributeSet is required if the category is mapped to a characteristic set with required attributes. On the US site, attributes are usually required for Tickets, eBay Motors vehicles, and Real Estate listings. See GetCategory2CS and GetAttributesCS. See the Developer's Guide for information about attribute meta-data and validation rules that are applicable when listing items.<br> <br> In GetItem, the Half.com item condition may be returned once in an AttributeSet node with Half.com IDs and values, and once in a separate AttributeSet node with a site-wide eBay item condition. The Half.com IDs are not necessarily returned in GetAttributesCS, so you can use the eBay.com data instead. Half.com listings may also return an AttributeSet node with other eBay attributes.
	 * @var EbayTradingTypeAttributeSetType
	 */
	public $AttributeSet;
	/**
	 * Constructor
	 * @param EbayTradingTypeAttributeSetType AttributeSet
	 * @return EbayTradingTypeAttributeSetArrayType
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
	 * @return EbayTradingTypeAttributeSetType
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