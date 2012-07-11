<?php
/**
 * Class file for EbayTradingTypeRecommendationValidationRulesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRecommendationValidationRulesType
 * Documentation : Defines rules for recommended Item Specifics. The rules apply when the Item Specific is subsequently used in AddItem and related calls.
 * @date 04/07/2012
 */
class EbayTradingTypeRecommendationValidationRulesType extends EbayTradingWsdlClass
{
	/**
	 * The ValueType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data type (e.g., decimal) that eBay expects the value to adhere to in listing requests. Only returned if the data type is not Text. In some cases, more details about the data type are returned in the ValueFormat field.<br> <br> As buyers may search on the value you specify in AddItem, the ISBN, UPC, or EAN should match the value that was specified by the publisher or manufacturer.
	 * @var EbayTradingTypeValueTypeCodeType
	 */
	public $ValueType;
	/**
	 * The MinValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Minimum number of values that you can specify for this Item Specific in listing requests. Not returned if zero (0).<br> <br> If 1 or more, it means this Item Specfic is required in listing requests (in the specified category). (Your listing request will return errors if the Item Specific is not present.) If Relationship is also present, it means this Item Specific is required when you specify its parent value in listing requests.
	 * @var int
	 */
	public $MinValues;
	/**
	 * The MaxValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum number of values that you can specify for this Item Specific in listing requests (like AddItem) in the specified category.<br> <br> Most Item Specifics can only have one value. When this is greater than 1, your application can present the value recommendations (if any) as a multi-select list to the seller. (See SelectionMode to determine whether the seller needs to choose from eBay's recommendations or not.)
	 * @var int
	 */
	public $MaxValues;
	/**
	 * The SelectionMode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Controls whether you can specify your own name and value in listing requests, or if you need to use a name and/or value that eBay has defined.
	 * @var EbayTradingTypeSelectionModeCodeType
	 */
	public $SelectionMode;
	/**
	 * The Confidence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates eBay's confidence that this is the right name or value, given the data you specified your request. The confidence is based on historical items in the same category, with similar titles (if specified).<br> <br> For example, in GetItemRecommendations, if your request includes a title with words like "Blue T-Shirt", then Color=Blue is likely to have a higher confidence score than Color=Red in the response. If the title does not include a recognized color value, then Color may still have a high confidence score (based on historical item data in the category), but the scores for Blue and Red may have a more even distribution.<br> <br> Only returned when IncludeConfidence is true in the request. Not returned when SelectionMode is Prefilled.
	 * @var int
	 */
	public $Confidence;
	/**
	 * The Relationship
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Indicates the Item Specific's logical dependency on another Item Specific, if any. <br> <br> For example, in a clothing category, Size Type could be recommended as a parent of Size, because Size=XL would mean something different to buyers when Size Type=Juniors or Size Type=Regular. <br> <br> Or in the US (in the future), a list of cities can vary depending on the state, so State could be recommended as a parent of City.<br> <br> Currently, categories only recommend a maximum of one parent for an Item Specific. For example, Size=XL could have a Size Type=Juniors parent in a Juniors clothing category. In the future, some categories may recommend multiple parents. For example, City=Mountain View could have parents like State=California, State=New York, and State=North Carolina.<br> <br> If an Item Specific has value dependencies (i.e., if it has value recommendations that contain Relationship), then all of its value recommendations are returned (regardless of the number you specified in MaxValuesPerName).
	 * @var EbayTradingTypeNameValueRelationshipType
	 */
	public $Relationship;
	/**
	 * The VariationPicture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the name (e.g., Color) can (or must) be used to classify the variation pictures.
	 * @var EbayTradingTypeVariationPictureRuleCodeType
	 */
	public $VariationPicture;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the recommended name/value pair can be used in Item.Variations in AddFixedPriceItem and related calls. For example, a given category could disable a name like Brand in variation specifics (if Brand is only allowed in the item specifics at the Item level). The same category could enable a name like Size for variation specifics (in addition to recommending it for item specifics). If not returned, then the name/value can be used for both variation specifics and item specifics.
	 * @var EbayTradingTypeVariationSpecificsRuleCodeType
	 */
	public $VariationSpecifics;
	/**
	 * The ValueFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The format of the data type (e.g., date format) that eBay expects the item specific's value to adhere to in listing requests. A data type identified by the ValueType field may have different representations, and ValueFormat specifies the precise format that is required.
	 * @var EbayTradingTypeValueFormatCodeType
	 */
	public $ValueFormat;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeValueTypeCodeType ValueType
	 * @param int MinValues
	 * @param int MaxValues
	 * @param EbayTradingTypeSelectionModeCodeType SelectionMode
	 * @param int Confidence
	 * @param EbayTradingTypeNameValueRelationshipType Relationship
	 * @param EbayTradingTypeVariationPictureRuleCodeType VariationPicture
	 * @param EbayTradingTypeVariationSpecificsRuleCodeType VariationSpecifics
	 * @param EbayTradingTypeValueFormatCodeType ValueFormat
	 * @param DOMDocument any
	 * @return EbayTradingTypeRecommendationValidationRulesType
	 */
	public function __construct($_ValueType = null,$_MinValues = null,$_MaxValues = null,$_SelectionMode = null,$_Confidence = null,$_Relationship = null,$_VariationPicture = null,$_VariationSpecifics = null,$_ValueFormat = null,$_any = null)
	{
		parent::__construct(array('ValueType'=>$_ValueType,'MinValues'=>$_MinValues,'MaxValues'=>$_MaxValues,'SelectionMode'=>$_SelectionMode,'Confidence'=>$_Confidence,'Relationship'=>$_Relationship,'VariationPicture'=>$_VariationPicture,'VariationSpecifics'=>$_VariationSpecifics,'ValueFormat'=>$_ValueFormat,'any'=>$_any));
	}
	/**
	 * Set ValueType
	 * @param ValueTypeCodeType ValueType
	 * @return ValueTypeCodeType
	 */
	public function setValueType($_ValueType)
	{
		return ($this->ValueType = EbayTradingTypeValueTypeCodeType::valueIsValid($_ValueType)?$_ValueType:null);
	}
	/**
	 * Get ValueType
	 * @return EbayTradingTypeValueTypeCodeType
	 */
	public function getValueType()
	{
		return $this->ValueType;
	}
	/**
	 * Set MinValues
	 * @param int MinValues
	 * @return int
	 */
	public function setMinValues($_MinValues)
	{
		return ($this->MinValues = $_MinValues);
	}
	/**
	 * Get MinValues
	 * @return int
	 */
	public function getMinValues()
	{
		return $this->MinValues;
	}
	/**
	 * Set MaxValues
	 * @param int MaxValues
	 * @return int
	 */
	public function setMaxValues($_MaxValues)
	{
		return ($this->MaxValues = $_MaxValues);
	}
	/**
	 * Get MaxValues
	 * @return int
	 */
	public function getMaxValues()
	{
		return $this->MaxValues;
	}
	/**
	 * Set SelectionMode
	 * @param SelectionModeCodeType SelectionMode
	 * @return SelectionModeCodeType
	 */
	public function setSelectionMode($_SelectionMode)
	{
		return ($this->SelectionMode = EbayTradingTypeSelectionModeCodeType::valueIsValid($_SelectionMode)?$_SelectionMode:null);
	}
	/**
	 * Get SelectionMode
	 * @return EbayTradingTypeSelectionModeCodeType
	 */
	public function getSelectionMode()
	{
		return $this->SelectionMode;
	}
	/**
	 * Set Confidence
	 * @param int Confidence
	 * @return int
	 */
	public function setConfidence($_Confidence)
	{
		return ($this->Confidence = $_Confidence);
	}
	/**
	 * Get Confidence
	 * @return int
	 */
	public function getConfidence()
	{
		return $this->Confidence;
	}
	/**
	 * Set Relationship
	 * @param NameValueRelationshipType Relationship
	 * @return NameValueRelationshipType
	 */
	public function setRelationship($_Relationship)
	{
		return ($this->Relationship = $_Relationship);
	}
	/**
	 * Get Relationship
	 * @return EbayTradingTypeNameValueRelationshipType
	 */
	public function getRelationship()
	{
		return $this->Relationship;
	}
	/**
	 * Set VariationPicture
	 * @param VariationPictureRuleCodeType VariationPicture
	 * @return VariationPictureRuleCodeType
	 */
	public function setVariationPicture($_VariationPicture)
	{
		return ($this->VariationPicture = EbayTradingTypeVariationPictureRuleCodeType::valueIsValid($_VariationPicture)?$_VariationPicture:null);
	}
	/**
	 * Get VariationPicture
	 * @return EbayTradingTypeVariationPictureRuleCodeType
	 */
	public function getVariationPicture()
	{
		return $this->VariationPicture;
	}
	/**
	 * Set VariationSpecifics
	 * @param VariationSpecificsRuleCodeType VariationSpecifics
	 * @return VariationSpecificsRuleCodeType
	 */
	public function setVariationSpecifics($_VariationSpecifics)
	{
		return ($this->VariationSpecifics = EbayTradingTypeVariationSpecificsRuleCodeType::valueIsValid($_VariationSpecifics)?$_VariationSpecifics:null);
	}
	/**
	 * Get VariationSpecifics
	 * @return EbayTradingTypeVariationSpecificsRuleCodeType
	 */
	public function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * Set ValueFormat
	 * @param ValueFormatCodeType ValueFormat
	 * @return ValueFormatCodeType
	 */
	public function setValueFormat($_ValueFormat)
	{
		return ($this->ValueFormat = EbayTradingTypeValueFormatCodeType::valueIsValid($_ValueFormat)?$_ValueFormat:null);
	}
	/**
	 * Get ValueFormat
	 * @return EbayTradingTypeValueFormatCodeType
	 */
	public function getValueFormat()
	{
		return $this->ValueFormat;
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