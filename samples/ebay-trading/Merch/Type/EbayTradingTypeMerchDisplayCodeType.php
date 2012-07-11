<?php
/**
 * Class file for EbayTradingTypeMerchDisplayCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMerchDisplayCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMerchDisplayCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'DefaultTheme'
	 * Meta informations :
	 * 	- documentation : Uses the default eBay theme for cross-promotion widgets.
	 * @return string 'DefaultTheme'
	 */
	const VALUE_DEFAULTTHEME = 'DefaultTheme';
	/**
	 * Constant for value 'StoreTheme'
	 * Meta informations :
	 * 	- documentation : Uses the store theme for cross-promotion widgets.
	 * @return string 'StoreTheme'
	 */
	const VALUE_STORETHEME = 'StoreTheme';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeMerchDisplayCodeType
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
		return in_array($_value,array(self::VALUE_DEFAULTTHEME,self::VALUE_STORETHEME,self::VALUE_CUSTOMCODE));
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