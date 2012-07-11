<?php
/**
 * Class file for EbayTradingTypeCategoryFeatureDetailLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCategoryFeatureDetailLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCategoryFeatureDetailLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ReturnAll'
	 * Meta informations :
	 * 	- documentation : Return all available data.
	 * @return string 'ReturnAll'
	 */
	const VALUE_RETURNALL = 'ReturnAll';
	/**
	 * Constant for value 'ReturnFeatureDefinitions'
	 * Meta informations :
	 * 	- documentation : Return the category feature definitions only.
	 * @return string 'ReturnFeatureDefinitions'
	 */
	const VALUE_RETURNFEATUREDEFINITIONS = 'ReturnFeatureDefinitions';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCategoryFeatureDetailLevelCodeType
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
		return in_array($_value,array(self::VALUE_RETURNALL,self::VALUE_RETURNFEATUREDEFINITIONS,self::VALUE_CUSTOMCODE));
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