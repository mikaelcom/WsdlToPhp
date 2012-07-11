<?php
/**
 * Class file for EbayTradingTypeSellerBusinessCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerBusinessCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellerBusinessCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Undefined'
	 * Meta informations :
	 * 	- documentation : Type of seller account not defined.
	 * @return string 'Undefined'
	 */
	const VALUE_UNDEFINED = 'Undefined';
	/**
	 * Constant for value 'Private'
	 * Meta informations :
	 * 	- documentation : Private seller account.
	 * @return string 'Private'
	 */
	const VALUE_PRIVATE = 'Private';
	/**
	 * Constant for value 'Commercial'
	 * Meta informations :
	 * 	- documentation : Commercial seller account.
	 * @return string 'Commercial'
	 */
	const VALUE_COMMERCIAL = 'Commercial';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellerBusinessCodeType
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
		return in_array($_value,array(self::VALUE_UNDEFINED,self::VALUE_PRIVATE,self::VALUE_COMMERCIAL,self::VALUE_CUSTOMCODE));
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