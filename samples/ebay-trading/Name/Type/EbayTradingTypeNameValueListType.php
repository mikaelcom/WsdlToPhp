<?php
/**
 * Class file for EbayTradingTypeNameValueListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNameValueListType
 * Documentation : A name and corresponding value (a name/value pair).
 * @date 04/07/2012
 */
class EbayTradingTypeNameValueListType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A name in a name/value pair.<br> <br> <b>For the AddItem and AddFixedPriceItem families of calls:</b> In the Item.ItemSpecifics context, this can be any name that the seller wants to use. However, to help buyers find items more easily, it is a good idea to try to use a recommended name when possible (see GetCategorySpecifics or GetItemRecommendations). You can't specify the same name twice within the same listing.<br> <br> <b>For the AddFixedPriceItem family of calls:</b> In the VariationSpecifics context, this can be any name that the seller wants to use, unless the VariationsEnabled flag is false for the name in the GetCategorySpecifics response. For example, for some categories eBay may recommend that you only use "Brand" as a shared name at the Item level, not in variations.<br> <br> <b>For GetCategorySpecifics and GetItemRecommendations:</b> This is a recommended (popular) name to use for items in the specified category (e.g., "Brand" might be recommended, not "Manufacturer"). </span> <br> <br> In the GetProducts response, this is an attribute name that is defined for a catalog product.<br> <br> <b>For PlaceOffer:</b> Required if the item being purchased includes Item Variations.
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A value associated with the name.<br> <br> <b>For the AddItem family of calls:</b> If you specify multiple values for Item Specifics, eBay only stores the first one, unless GetCategorySpecifics or GetItemRecommendations indicates that the corresponding name supports multiple values.<br> <br> <b>For the AddFixedPriceItem family of calls:</b> If you specify multiple values for Item Specifics or Variation Specifics, eBay only stores the first one, unless GetCategorySpecifics or GetItemRecommendations indicates that the corresponding name supports multiple values.<br> <br> In VariationSpecificSet, you typically specify multiple Value fields for each name. For example, if Name=Size, you would specify all size values that you wan to offer in the listing.<br> <br> <b>For GetCategorySpecifics and GetItemRecommendations:</b> The most highly recommended values are returned first. For these calls, Value is only returned when recommended values are available.<br> <br> <b>For PlaceOffer:</b> Required if the item being purchased includes Item Variations.
	 * @var string
	 */
	public $Value;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The origin of this Item Specific. Only returned if the source is not custom Item Specifics.
	 * @var EbayTradingTypeItemSpecificSourceCodeType
	 */
	public $Source;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Value
	 * @param EbayTradingTypeItemSpecificSourceCodeType Source
	 * @param DOMDocument any
	 * @return EbayTradingTypeNameValueListType
	 */
	public function __construct($_Name = null,$_Value = null,$_Source = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value,'Source'=>$_Source,'any'=>$_any));
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
	 * Set Source
	 * @param ItemSpecificSourceCodeType Source
	 * @return ItemSpecificSourceCodeType
	 */
	public function setSource($_Source)
	{
		return ($this->Source = EbayTradingTypeItemSpecificSourceCodeType::valueIsValid($_Source)?$_Source:null);
	}
	/**
	 * Get Source
	 * @return EbayTradingTypeItemSpecificSourceCodeType
	 */
	public function getSource()
	{
		return $this->Source;
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