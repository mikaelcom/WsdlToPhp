<?php
/**
 * Class file for GGAdwordsTypeConversionOptimizerBidType
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeConversionOptimizerBidType
 * @date 03/07/2012
 */
class GGAdwordsTypeConversionOptimizerBidType extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'TARGET_CPA'
	 * Meta informations :
	 * 	- documentation : Average cost-per-acquisition (targetCPA) bid type.
	 * @return string 'TARGET_CPA'
	 */
	const VALUE_TARGET_CPA = 'TARGET_CPA';
	/**
	 * Constant for value 'MAX_CPA'
	 * Meta informations :
	 * 	- documentation : Max CPA bid type.
	 * @return string 'MAX_CPA'
	 */
	const VALUE_MAX_CPA = 'MAX_CPA';
	/**
	 * Constructor
	 * @return GGAdwordsTypeConversionOptimizerBidType
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
		return in_array($_value,array(self::VALUE_TARGET_CPA,self::VALUE_MAX_CPA));
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