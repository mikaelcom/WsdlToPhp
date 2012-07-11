<?php
/**
 * Class file for EbayTradingTypePayPalAccountTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePayPalAccountTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePayPalAccountTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Personal'
	 * Meta informations :
	 * 	- documentation : Personal account.
	 * @return string 'Personal'
	 */
	const VALUE_PERSONAL = 'Personal';
	/**
	 * Constant for value 'Premier'
	 * Meta informations :
	 * 	- documentation : Premier account.
	 * @return string 'Premier'
	 */
	const VALUE_PREMIER = 'Premier';
	/**
	 * Constant for value 'Business'
	 * Meta informations :
	 * 	- documentation : Business account.
	 * @return string 'Business'
	 */
	const VALUE_BUSINESS = 'Business';
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Invalid'
	 * @return string 'Invalid'
	 */
	const VALUE_INVALID = 'Invalid';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePayPalAccountTypeCodeType
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
		return in_array($_value,array(self::VALUE_PERSONAL,self::VALUE_PREMIER,self::VALUE_BUSINESS,self::VALUE_UNKNOWN,self::VALUE_INVALID,self::VALUE_CUSTOMCODE));
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