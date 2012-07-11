<?php
/**
 * Class file for GGAdwordsTypePricingModel
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypePricingModel
 * @date 03/07/2012
 */
class GGAdwordsTypePricingModel extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'CLICKS'
	 * @return string 'CLICKS'
	 */
	const VALUE_CLICKS = 'CLICKS';
	/**
	 * Constant for value 'IMPRESSIONS'
	 * @return string 'IMPRESSIONS'
	 */
	const VALUE_IMPRESSIONS = 'IMPRESSIONS';
	/**
	 * Constant for value 'CONVERSIONS'
	 * @return string 'CONVERSIONS'
	 */
	const VALUE_CONVERSIONS = 'CONVERSIONS';
	/**
	 * Constructor
	 * @return GGAdwordsTypePricingModel
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
		return in_array($_value,array(self::VALUE_CLICKS,self::VALUE_IMPRESSIONS,self::VALUE_CONVERSIONS));
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