<?php
/**
 * Class file for EbayTradingTypeAttributeSetType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAttributeSetType
 * Documentation : Version of the attribute set being specified (in requests) or that is currently on the site. This value changes each time changes are made to the category-to-characteristic set mappings or characteristic set data. The current version value is not necessarily greater than the previous value. Therefore, when comparing versions, only compare whether the value has changed.<br><br> In listing requests, if you do not specify this value, eBay assumes you are using the current attribute set version. If you specify the version number of the attribute meta-data that you have stored locally, eBay will compare it to the current version on the site and return a warning if the versions do not match. If an error occurs due to invalid attribute data, this warning can be useful to help you determine if you might be sending outdated data. Not applicable to Half.com.
 * @date 04/07/2012
 */
class EbayTradingTypeAttributeSetType extends EbayTradingWsdlClass
{
	/**
	 * The Attribute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A salient aspect or feature of an item in a given category. Attributes are known as "Item Specifics" in the eBay Web site. Use attributes to describe an item in a standard way so that buyers can find it more easily. For example, "Publication Year" is a standard attribute for books. In item-listing requests, multiple attributes can be specified. Some categories (e.g., Tickets) always require certain attributes to be specified. Therefore, in item-listing requests you need to at least specify "editable" attributes (EditType 0 and EditType 2 attributes) if they are identified as required in the attribute meta-data. See the eBay Web Services guide for information about attribute meta-data, how to determine the valid attributes for a category, and how to determine whether attributes are required. <br><br> If you are revising or relisting an item, you don't need to pass in attributes that were already specified in the original listing. To remove an optional attribute, set all its value IDs to "-100". If the item has bids (or items have been sold) but there are more than 12 hours remaining until the listing ends, you can add Attribute nodes but you cannot remove or modify data in previously specified Attribute nodes. If the item has bids and the listing ends within 12 hours, you cannot add or remove Attribute nodes or modify the contents of previously specified Attribute nodes. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeAttributeType
	 */
	public $Attribute;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The attributeSetID
	 * @var int
	 */
	public $attributeSetID;
	/**
	 * The attributeSetVersion
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $attributeSetVersion;
	/**
	 * Constructor
	 * @param EbayTradingTypeAttributeType Attribute
	 * @param DOMDocument any
	 * @param int attributeSetID
	 * @param string attributeSetVersion
	 * @return EbayTradingTypeAttributeSetType
	 */
	public function __construct($_Attribute = null,$_any = null,$_attributeSetID = null,$_attributeSetVersion = null)
	{
		parent::__construct(array('Attribute'=>$_Attribute,'any'=>$_any,'attributeSetID'=>$_attributeSetID,'attributeSetVersion'=>$_attributeSetVersion));
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
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
	}
	/**
	 * Set attributeSetID
	 * @param int attributeSetID
	 * @return int
	 */
	public function setAttributeSetID($_attributeSetID)
	{
		return ($this->attributeSetID = $_attributeSetID);
	}
	/**
	 * Get attributeSetID
	 * @return int
	 */
	public function getAttributeSetID()
	{
		return $this->attributeSetID;
	}
	/**
	 * Set attributeSetVersion
	 * @param string attributeSetVersion
	 * @return string
	 */
	public function setAttributeSetVersion($_attributeSetVersion)
	{
		return ($this->attributeSetVersion = $_attributeSetVersion);
	}
	/**
	 * Get attributeSetVersion
	 * @return string
	 */
	public function getAttributeSetVersion()
	{
		return $this->attributeSetVersion;
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