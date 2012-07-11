<?php
/**
 * Class file for EbayTradingTypeSellerGuaranteeLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerGuaranteeLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellerGuaranteeLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NotEligible'
	 * Meta informations :
	 * 	- documentation : (out) Not eligible for Seller Level Guarantee
	 * @return string 'NotEligible'
	 */
	const VALUE_NOTELIGIBLE = 'NotEligible';
	/**
	 * Constant for value 'Regular'
	 * Meta informations :
	 * 	- documentation : (out) Regular eligibility level
	 * @return string 'Regular'
	 */
	const VALUE_REGULAR = 'Regular';
	/**
	 * Constant for value 'Premium'
	 * Meta informations :
	 * 	- documentation : (out) Premium eligibility level
	 * @return string 'Premium'
	 */
	const VALUE_PREMIUM = 'Premium';
	/**
	 * Constant for value 'Ultra'
	 * Meta informations :
	 * 	- documentation : (out) Ultra eligibility level
	 * @return string 'Ultra'
	 */
	const VALUE_ULTRA = 'Ultra';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellerGuaranteeLevelCodeType
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
		return in_array($_value,array(self::VALUE_NOTELIGIBLE,self::VALUE_REGULAR,self::VALUE_PREMIUM,self::VALUE_ULTRA,self::VALUE_CUSTOMCODE));
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