<?php
/**
 * Class file for EbayTradingTypePayPalAccountLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePayPalAccountLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePayPalAccountLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Unverified'
	 * Meta informations :
	 * 	- documentation : Account unverified
	 * @return string 'Unverified'
	 */
	const VALUE_UNVERIFIED = 'Unverified';
	/**
	 * Constant for value 'InternationalUnverified'
	 * Meta informations :
	 * 	- documentation : Account international unverified
	 * @return string 'InternationalUnverified'
	 */
	const VALUE_INTERNATIONALUNVERIFIED = 'InternationalUnverified';
	/**
	 * Constant for value 'Verified'
	 * Meta informations :
	 * 	- documentation : Account verified
	 * @return string 'Verified'
	 */
	const VALUE_VERIFIED = 'Verified';
	/**
	 * Constant for value 'InternationalVerified'
	 * Meta informations :
	 * 	- documentation : Account international verified
	 * @return string 'InternationalVerified'
	 */
	const VALUE_INTERNATIONALVERIFIED = 'InternationalVerified';
	/**
	 * Constant for value 'Trusted'
	 * Meta informations :
	 * 	- documentation : Account trusted
	 * @return string 'Trusted'
	 */
	const VALUE_TRUSTED = 'Trusted';
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
	 * @return EbayTradingTypePayPalAccountLevelCodeType
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
		return in_array($_value,array(self::VALUE_UNVERIFIED,self::VALUE_INTERNATIONALUNVERIFIED,self::VALUE_VERIFIED,self::VALUE_INTERNATIONALVERIFIED,self::VALUE_TRUSTED,self::VALUE_UNKNOWN,self::VALUE_INVALID,self::VALUE_CUSTOMCODE));
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