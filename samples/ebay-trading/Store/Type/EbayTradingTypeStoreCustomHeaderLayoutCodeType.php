<?php
/**
 * Class file for EbayTradingTypeStoreCustomHeaderLayoutCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomHeaderLayoutCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomHeaderLayoutCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NoHeader'
	 * Meta informations :
	 * 	- documentation : Specifies that the Store does not have a custom header.
	 * @return string 'NoHeader'
	 */
	const VALUE_NOHEADER = 'NoHeader';
	/**
	 * Constant for value 'CustomHeaderShown'
	 * Meta informations :
	 * 	- documentation : Specifies that the Store does have a custom header.
	 * @return string 'CustomHeaderShown'
	 */
	const VALUE_CUSTOMHEADERSHOWN = 'CustomHeaderShown';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreCustomHeaderLayoutCodeType
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
		return in_array($_value,array(self::VALUE_NOHEADER,self::VALUE_CUSTOMHEADERSHOWN,self::VALUE_CUSTOMCODE));
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