<?php
/**
 * Class file for EbayTradingTypeStoreHeaderStyleCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreHeaderStyleCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreHeaderStyleCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Full'
	 * Meta informations :
	 * 	- documentation : The full Store header is used.
	 * @return string 'Full'
	 */
	const VALUE_FULL = 'Full';
	/**
	 * Constant for value 'Minimized'
	 * Meta informations :
	 * 	- documentation : A minimized Store header is used.
	 * @return string 'Minimized'
	 */
	const VALUE_MINIMIZED = 'Minimized';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreHeaderStyleCodeType
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
		return in_array($_value,array(self::VALUE_FULL,self::VALUE_MINIMIZED,self::VALUE_CUSTOMCODE));
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