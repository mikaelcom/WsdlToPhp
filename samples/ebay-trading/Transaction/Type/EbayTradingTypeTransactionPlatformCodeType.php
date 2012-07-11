<?php
/**
 * Class file for EbayTradingTypeTransactionPlatformCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTransactionPlatformCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTransactionPlatformCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'eBay'
	 * Meta informations :
	 * 	- documentation : The order line item was created on the main eBay site.
	 * @return string 'eBay'
	 */
	const VALUE_EBAY = 'eBay';
	/**
	 * Constant for value 'Express'
	 * Meta informations :
	 * 	- documentation : The order line item was created on the eBay Express site.
	 * @return string 'Express'
	 */
	const VALUE_EXPRESS = 'Express';
	/**
	 * Constant for value 'Half'
	 * Meta informations :
	 * 	- documentation : The order line item was created on Half.com site.
	 * @return string 'Half'
	 */
	const VALUE_HALF = 'Half';
	/**
	 * Constant for value 'Shopping'
	 * Meta informations :
	 * 	- documentation : The order line item was created on the Shopping.com site.
	 * @return string 'Shopping'
	 */
	const VALUE_SHOPPING = 'Shopping';
	/**
	 * Constant for value 'WorldOfGood'
	 * Meta informations :
	 * 	- documentation : The order line item was created on the WorldOfGood site.
	 * @return string 'WorldOfGood'
	 */
	const VALUE_WORLDOFGOOD = 'WorldOfGood';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTransactionPlatformCodeType
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
		return in_array($_value,array(self::VALUE_EBAY,self::VALUE_EXPRESS,self::VALUE_HALF,self::VALUE_SHOPPING,self::VALUE_WORLDOFGOOD,self::VALUE_CUSTOMCODE));
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