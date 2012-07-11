<?php
/**
 * Class file for EbayTradingTypeRecommendationEngineCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRecommendationEngineCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRecommendationEngineCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ListingAnalyzer'
	 * Meta informations :
	 * 	- documentation : (in) Listing Analyzer engine; Returns tips related to fields that a seller wants to specify in a listing.
	 * @return string 'ListingAnalyzer'
	 */
	const VALUE_LISTINGANALYZER = 'ListingAnalyzer';
	/**
	 * Constant for value 'SIFFTAS'
	 * Meta informations :
	 * 	- documentation : (in) Reserved for internal or future use.
	 * @return string 'SIFFTAS'
	 */
	const VALUE_SIFFTAS = 'SIFFTAS';
	/**
	 * Constant for value 'ProductPricing'
	 * Meta informations :
	 * 	- documentation : (in) Product Pricing engine. Returns average start and sold prices of completed items that were listed a specified product ID.
	 * @return string 'ProductPricing'
	 */
	const VALUE_PRODUCTPRICING = 'ProductPricing';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'SuggestedAttributes'
	 * Meta informations :
	 * 	- documentation : (in) Suggested Attributes engine. Returns suggested attributes and catalog products (for Pre-filled Item Information) that have been used by other sellers who listed similar items in the same category.
	 * @return string 'SuggestedAttributes'
	 */
	const VALUE_SUGGESTEDATTRIBUTES = 'SuggestedAttributes';
	/**
	 * Constant for value 'ItemSpecifics'
	 * Meta informations :
	 * 	- documentation : (in) Custom Item Specifics engine. Returns the most popular names and values to use for custom Item Specifics based the requested category (and the Title, if specified).
	 * @return string 'ItemSpecifics'
	 */
	const VALUE_ITEMSPECIFICS = 'ItemSpecifics';
	/**
	 * Constructor
	 * @return EbayTradingTypeRecommendationEngineCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_LISTINGANALYZER,self::VALUE_SIFFTAS,self::VALUE_PRODUCTPRICING,self::VALUE_CUSTOMCODE,self::VALUE_SUGGESTEDATTRIBUTES,self::VALUE_ITEMSPECIFICS));
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