<?php
/**
 * Class file for EbayTradingTypeLookupAttributeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLookupAttributeType
 * Documentation : An optional attribute that the seller wants to include in the listing. Enables you to specify an attribute by name rather than by ID. Only valid in Media categories (Books, DVD and Movies, Music, and Video Game categories). Currently, only the Condition attribute is supported.
 * @date 04/07/2012
 */
class EbayTradingTypeLookupAttributeType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The literal name of the attribute. For the US site, pass "Condition" (without quotes).<br> <br> When catalog-enabled categories start supporting the newer ConditionID field in production, use ConditionID instead of LookupAttribute.Name.<br> <br> Not applicable to Half.com.
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The attribute's literal value (i.e., not the value ID), as it is returned in GetAttributesCS. For this US site, this could be a literal like "Brand New" (without quotes) for a book or "New, Never Opened" for a camera. The value is not case-sensitive, but all spaces and punctuation need to match the attribute's literal value.<br> <br> Not applicable to Half.com.<br> <br> eBay uses this value to set the correct attribute ID and value ID on the item. This means you need to specify the correct value for the primary category (which is either the category you specify in PrimaryCategory or the category that eBay sets based on the product you identify in ProductListingDetails or ExternalProductID. <br> <br> In GetItem, the attribute-based condition value is returned in AttributeSetArray.<br> <br> When catalog-enabled categories start supporting the newer ConditionID model in production, use ConditionID instead of LookupAttribute.Value.
	 * @var string
	 */
	public $Value;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Value
	 * @param DOMDocument any
	 * @return EbayTradingTypeLookupAttributeType
	 */
	public function __construct($_Name = null,$_Value = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>