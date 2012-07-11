<?php
/**
 * Class file for EbayTradingTypeValType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeValType
 * @date 04/07/2012
 */
class EbayTradingTypeValType extends EbayTradingWsdlClass
{
	/**
	 * The ValueLiteral
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The descriptive name of an attribute or characteristic value (e.g., "New" might be a literal value for a Condition attribute). In item-listing requests, if you send ValueID with an id of -3 or -6, you must use ValueLiteral to enter the value the user specified. Otherwise, eBay treats the request as if no value was sent at all. For eBay.com listings, use AttributeSetArray.AttributeSet.Attribute.Value.ValueLiteral. The max length allowed varies per attribute.<br> <br> For Half.com, use AttributeArray.Attribute.Value.ValueLiteral in listing requests. That is, the parent elements and usage for Half.com differs from eBay's standard Item Specifics format (and there is no relationship to GetAttributesCS). For Half.com, AttributeArray.Attribute.Value.ValueLiteral is required when you use AddItem. See the eBay Web Services Guide for valid values. For the Half.com Notes attribute, the max length is 500 characters. You can revise AttributeArray.Attribute.Value.ValueLiteral for Half.com listings.
	 * @var string
	 */
	public $ValueLiteral;
	/**
	 * The SuggestedValueLiteral
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : (out) Reserved for future use. Suggested alternative text for ValueLiteral. Multiple SuggestedValueLiteral elements can be returned in a Value node. Not applicable to Half.com.
	 * @var string
	 */
	public $SuggestedValueLiteral;
	/**
	 * The ValueID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Constant value that identifies the attribute or characteristic in a language-independent way. Unique within the characteristic set.<br> <br> In item-listing requests, if the ID is defined as -3 or -6 (Other) in GetAttributesCS or GetProductSellingPages, use ValueLiteral to specify the string value that the user entered. Otherwise, use ValueID to specify the ID that is pre-defined in GetAttributesCS or GetProductSellingPages. In item-listing requests and product searches, the possible ID values are:<br> -3 = User entered an arbitrary value (not an "Other" field)<br> -6 = User entered a value in an "Other" field<br> -100 = Value not specified (null)<br> #### (integer) = Identifier for a pre-defined value that the user selected (e.g., -14 or 1001)<br> For eBay.com, required if ValueList is specified. Not applicable to Half.com.
	 * @var int
	 */
	public $ValueID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ValueLiteral
	 * @param string SuggestedValueLiteral
	 * @param int ValueID
	 * @param DOMDocument any
	 * @return EbayTradingTypeValType
	 */
	public function __construct($_ValueLiteral = null,$_SuggestedValueLiteral = null,$_ValueID = null,$_any = null)
	{
		parent::__construct(array('ValueLiteral'=>$_ValueLiteral,'SuggestedValueLiteral'=>$_SuggestedValueLiteral,'ValueID'=>$_ValueID,'any'=>$_any));
	}
	/**
	 * Set ValueLiteral
	 * @param string ValueLiteral
	 * @return string
	 */
	public function setValueLiteral($_ValueLiteral)
	{
		return ($this->ValueLiteral = $_ValueLiteral);
	}
	/**
	 * Get ValueLiteral
	 * @return string
	 */
	public function getValueLiteral()
	{
		return $this->ValueLiteral;
	}
	/**
	 * Set SuggestedValueLiteral
	 * @param string SuggestedValueLiteral
	 * @return string
	 */
	public function setSuggestedValueLiteral($_SuggestedValueLiteral)
	{
		return ($this->SuggestedValueLiteral = $_SuggestedValueLiteral);
	}
	/**
	 * Get SuggestedValueLiteral
	 * @return string
	 */
	public function getSuggestedValueLiteral()
	{
		return $this->SuggestedValueLiteral;
	}
	/**
	 * Set ValueID
	 * @param int ValueID
	 * @return int
	 */
	public function setValueID($_ValueID)
	{
		return ($this->ValueID = $_ValueID);
	}
	/**
	 * Get ValueID
	 * @return int
	 */
	public function getValueID()
	{
		return $this->ValueID;
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