<?php
/**
 * Class file for EbayTradingTypeNameRecommendationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNameRecommendationType
 * Documentation : Defines details about recommended names and values for custom Item Specifics.
 * @date 04/07/2012
 */
class EbayTradingTypeNameRecommendationType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A recommended Item Specific name. Always returned when NameRecommendation is returned.
	 * @var string
	 */
	public $Name;
	/**
	 * The ValidationRules
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Constraints that eBay places on this Item Specific. Always returned when NameRecommendation is returned. As a general rule, AddItem and related calls will not be blocked if you don't use eBay's recommendations, except where specified in this documentation.
	 * @var EbayTradingTypeRecommendationValidationRulesType
	 */
	public $ValidationRules;
	/**
	 * The ValueRecommendation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A recommended value (if any) for the Item Specific name. Only returned when a recommended value is available in the system.<br> <br> If an Item Specific has value dependencies (i.e., if it has value recommendations that contain Relationship), then all of its value recommendations are returned. If it has no dependencies, then the maximum number of value recommendations that can be returned is limited by the number you specified in MaxValuesPerName.
	 * @var EbayTradingTypeValueRecommendationType
	 */
	public $ValueRecommendation;
	/**
	 * The HelpURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A page on the eBay Web site with context-specific help tips that provide useful information about this Item Specific. Only returned when an applicable page is available in the system.
	 * @var anyURI
	 */
	public $HelpURL;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var EbayTradingTypeItemSpecificSourceCodeType
	 */
	public $Source;
	/**
	 * The HelpText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Help-text defines the purpose of the tag. The help text will be shown only when it is available for the particular tag
	 * @var string
	 */
	public $HelpText;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param EbayTradingTypeRecommendationValidationRulesType ValidationRules
	 * @param EbayTradingTypeValueRecommendationType ValueRecommendation
	 * @param anyURI HelpURL
	 * @param EbayTradingTypeItemSpecificSourceCodeType Source
	 * @param string HelpText
	 * @param DOMDocument any
	 * @return EbayTradingTypeNameRecommendationType
	 */
	public function __construct($_Name = null,$_ValidationRules = null,$_ValueRecommendation = null,$_HelpURL = null,$_Source = null,$_HelpText = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'ValidationRules'=>$_ValidationRules,'ValueRecommendation'=>$_ValueRecommendation,'HelpURL'=>$_HelpURL,'Source'=>$_Source,'HelpText'=>$_HelpText,'any'=>$_any));
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
	 * Set ValidationRules
	 * @param RecommendationValidationRulesType ValidationRules
	 * @return RecommendationValidationRulesType
	 */
	public function setValidationRules($_ValidationRules)
	{
		return ($this->ValidationRules = $_ValidationRules);
	}
	/**
	 * Get ValidationRules
	 * @return EbayTradingTypeRecommendationValidationRulesType
	 */
	public function getValidationRules()
	{
		return $this->ValidationRules;
	}
	/**
	 * Set ValueRecommendation
	 * @param ValueRecommendationType ValueRecommendation
	 * @return ValueRecommendationType
	 */
	public function setValueRecommendation($_ValueRecommendation)
	{
		return ($this->ValueRecommendation = $_ValueRecommendation);
	}
	/**
	 * Get ValueRecommendation
	 * @return EbayTradingTypeValueRecommendationType
	 */
	public function getValueRecommendation()
	{
		return $this->ValueRecommendation;
	}
	/**
	 * Set HelpURL
	 * @param anyURI HelpURL
	 * @return anyURI
	 */
	public function setHelpURL($_HelpURL)
	{
		return ($this->HelpURL = $_HelpURL);
	}
	/**
	 * Get HelpURL
	 * @return anyURI
	 */
	public function getHelpURL()
	{
		return $this->HelpURL;
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
	 * Set HelpText
	 * @param string HelpText
	 * @return string
	 */
	public function setHelpText($_HelpText)
	{
		return ($this->HelpText = $_HelpText);
	}
	/**
	 * Get HelpText
	 * @return string
	 */
	public function getHelpText()
	{
		return $this->HelpText;
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