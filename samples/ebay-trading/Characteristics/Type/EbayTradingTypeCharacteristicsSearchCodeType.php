<?php
/**
 * Class file for EbayTradingTypeCharacteristicsSearchCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharacteristicsSearchCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCharacteristicsSearchCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Single'
	 * Meta informations :
	 * 	- documentation : (out) The search criteria can consist of one attribute.
	 * @return string 'Single'
	 */
	const VALUE_SINGLE = 'Single';
	/**
	 * Constant for value 'Multi'
	 * Meta informations :
	 * 	- documentation : (out) Not used. (For multi-attribute search criteria, call GetProductFinder instead.)
	 * @return string 'Multi'
	 */
	const VALUE_MULTI = 'Multi';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCharacteristicsSearchCodeType
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
		return in_array($_value,array(self::VALUE_SINGLE,self::VALUE_MULTI,self::VALUE_CUSTOMCODE));
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