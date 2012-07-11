<?php
/**
 * Class file for EbayTradingTypeValueRecommendationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeValueRecommendationType
 * Documentation : Defines details about recommended values for custom Item Specifics.
 * @date 04/07/2012
 */
class EbayTradingTypeValueRecommendationType extends EbayTradingWsdlClass
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A recommended value for the Item Specific. Only returned when a recommended value is available.
	 * @var string
	 */
	public $Value;
	/**
	 * The ValidationRules
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Constraints that eBay places on this Item Specific value.<br> <br> Only returned when you configure your request to include relationships and/or confidence, and a recommended value is available. (Not returned when ExcludeRelationships is true and IncludeConfidence is false.)
	 * @var EbayTradingTypeRecommendationValidationRulesType
	 */
	public $ValidationRules;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Value
	 * @param EbayTradingTypeRecommendationValidationRulesType ValidationRules
	 * @param DOMDocument any
	 * @return EbayTradingTypeValueRecommendationType
	 */
	public function __construct($_Value = null,$_ValidationRules = null,$_any = null)
	{
		parent::__construct(array('Value'=>$_Value,'ValidationRules'=>$_ValidationRules,'any'=>$_any));
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