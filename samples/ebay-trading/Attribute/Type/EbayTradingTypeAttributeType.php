<?php
/**
 * Class file for EbayTradingTypeAttributeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAttributeType
 * Documentation : Name of the attribute being specified. This is not part of eBay's standard Item Specifics format (i.e., there is no relationship to GetAttributesCS). For GetOrders, this is always returned for Half.com orders. (It is not applicable to orders on the eBay.com site.) For Half.com, see the eBay Web Services Guide for valid input values. For Half.com, this field is required when you use AddItem. You can revise this value for Half.com listings.
 * @date 04/07/2012
 */
class EbayTradingTypeAttributeType extends EbayTradingWsdlClass
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A value the seller selected or entered for the attribute. At least one value is required for each Attribute that you specify. Some attributes can have multiple values. See the eBay Web Services guide sections on Item Specifics (Attributes) and Pre-filled Item Information (Catalogs) for information about using GetAttributesCS to determine valid attribute values.<br><br> For eBay.com listings, use AttributeSetArray.AttributeSet.Attribute.Value. For Half.com, use AttributeArray.Attribute.Value. That is, the parent elements and usage for Half.com differs from eBay's standard Item Specifics format (and there is no relationship to GetAttributesCS). For Half.com, this does not use the same Attributes logic as eBay's Item Specifics. For Half.com, AttributeArray.Attribute.Value is required when you use AddItem. see the eBay Web Services Guide for valid values. You can revise AttributeArray.Attribute.Value for Half.com listings.
	 * @var EbayTradingTypeValType
	 */
	public $Value;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The attributeID
	 * @var int
	 */
	public $attributeID;
	/**
	 * The attributeLabel
	 * @var string
	 */
	public $attributeLabel;
	/**
	 * Constructor
	 * @param EbayTradingTypeValType Value
	 * @param DOMDocument any
	 * @param int attributeID
	 * @param string attributeLabel
	 * @return EbayTradingTypeAttributeType
	 */
	public function __construct($_Value = null,$_any = null,$_attributeID = null,$_attributeLabel = null)
	{
		parent::__construct(array('Value'=>$_Value,'any'=>$_any,'attributeID'=>$_attributeID,'attributeLabel'=>$_attributeLabel));
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
	 * @return EbayTradingTypeValType
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
	 * Set attributeID
	 * @param int attributeID
	 * @return int
	 */
	public function setAttributeID($_attributeID)
	{
		return ($this->attributeID = $_attributeID);
	}
	/**
	 * Get attributeID
	 * @return int
	 */
	public function getAttributeID()
	{
		return $this->attributeID;
	}
	/**
	 * Set attributeLabel
	 * @param string attributeLabel
	 * @return string
	 */
	public function setAttributeLabel($_attributeLabel)
	{
		return ($this->attributeLabel = $_attributeLabel);
	}
	/**
	 * Get attributeLabel
	 * @return string
	 */
	public function getAttributeLabel()
	{
		return $this->attributeLabel;
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