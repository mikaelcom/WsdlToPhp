<?php
/**
 * Class file for EbayTradingTypeSellingManagerShippedStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerShippedStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerShippedStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Shipped'
	 * Meta informations :
	 * 	- documentation : The shipped status is "shipped."
	 * @return string 'Shipped'
	 */
	const VALUE_SHIPPED = 'Shipped';
	/**
	 * Constant for value 'Unshipped'
	 * Meta informations :
	 * 	- documentation : The shipped status is "unshipped."
	 * @return string 'Unshipped'
	 */
	const VALUE_UNSHIPPED = 'Unshipped';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerShippedStatusCodeType
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
		return in_array($_value,array(self::VALUE_SHIPPED,self::VALUE_UNSHIPPED,self::VALUE_CUSTOMCODE));
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