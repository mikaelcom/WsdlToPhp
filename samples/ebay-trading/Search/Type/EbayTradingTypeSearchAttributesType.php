<?php
/**
 * Class file for EbayTradingTypeSearchAttributesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSearchAttributesType
 * Documentation : A product or item aspect or feature that can be used as a criterion in a search for catalog content or for listed items. For example, "Format" might be a criterion for searching the catalogs for Pre-filled Item Information related to hardcover books.
 * @date 04/07/2012
 */
class EbayTradingTypeSearchAttributesType extends EbayTradingWsdlClass
{
	/**
	 * The AttributeID
	 * Meta informations :
	 * 	- documentation : Unique identifier for the attribute within the characteristic set. Required if SearchAttributes is specified.
	 * @var int
	 */
	public $AttributeID;
	/**
	 * The DateSpecifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the date sub-component that the attribute represents. This only applies to date attributes. Required when searching by date attributes. Allows for separate text fields or drop-down lists to be rendered for each sub-component. For example, the day, month, and year can be rendered as separate drop-down lists.
	 * @var EbayTradingTypeDateSpecifierCodeType
	 */
	public $DateSpecifier;
	/**
	 * The RangeSpecifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the attribute represents the high or low end in a range, such as a date range or a price range. Required when searching on ranges.
	 * @var EbayTradingTypeRangeCodeType
	 */
	public $RangeSpecifier;
	/**
	 * The ValueList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for the list of one or more valid values that the user has selected for the searchable attribute. If multiple values are specified, the search engine applies "OR" logic to the query (i.e., at least one of the specified values must match). Required if SearchAttributes is specified.
	 * @var EbayTradingTypeValType
	 */
	public $ValueList;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int AttributeID
	 * @param EbayTradingTypeDateSpecifierCodeType DateSpecifier
	 * @param EbayTradingTypeRangeCodeType RangeSpecifier
	 * @param EbayTradingTypeValType ValueList
	 * @param DOMDocument any
	 * @return EbayTradingTypeSearchAttributesType
	 */
	public function __construct($_AttributeID = null,$_DateSpecifier = null,$_RangeSpecifier = null,$_ValueList = null,$_any = null)
	{
		parent::__construct(array('AttributeID'=>$_AttributeID,'DateSpecifier'=>$_DateSpecifier,'RangeSpecifier'=>$_RangeSpecifier,'ValueList'=>$_ValueList,'any'=>$_any));
	}
	/**
	 * Set AttributeID
	 * @param int AttributeID
	 * @return int
	 */
	public function setAttributeID($_AttributeID)
	{
		return ($this->AttributeID = $_AttributeID);
	}
	/**
	 * Get AttributeID
	 * @return int
	 */
	public function getAttributeID()
	{
		return $this->AttributeID;
	}
	/**
	 * Set DateSpecifier
	 * @param DateSpecifierCodeType DateSpecifier
	 * @return DateSpecifierCodeType
	 */
	public function setDateSpecifier($_DateSpecifier)
	{
		return ($this->DateSpecifier = EbayTradingTypeDateSpecifierCodeType::valueIsValid($_DateSpecifier)?$_DateSpecifier:null);
	}
	/**
	 * Get DateSpecifier
	 * @return EbayTradingTypeDateSpecifierCodeType
	 */
	public function getDateSpecifier()
	{
		return $this->DateSpecifier;
	}
	/**
	 * Set RangeSpecifier
	 * @param RangeCodeType RangeSpecifier
	 * @return RangeCodeType
	 */
	public function setRangeSpecifier($_RangeSpecifier)
	{
		return ($this->RangeSpecifier = EbayTradingTypeRangeCodeType::valueIsValid($_RangeSpecifier)?$_RangeSpecifier:null);
	}
	/**
	 * Get RangeSpecifier
	 * @return EbayTradingTypeRangeCodeType
	 */
	public function getRangeSpecifier()
	{
		return $this->RangeSpecifier;
	}
	/**
	 * Set ValueList
	 * @param ValType ValueList
	 * @return ValType
	 */
	public function setValueList($_ValueList)
	{
		return ($this->ValueList = $_ValueList);
	}
	/**
	 * Get ValueList
	 * @return EbayTradingTypeValType
	 */
	public function getValueList()
	{
		return $this->ValueList;
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