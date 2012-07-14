<?php
/**
 * Class file for PayPalTypeChannelType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeChannelType
 * @date 14/07/2012
 */
class PayPalTypeChannelType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Merchant'
	 * @return string 'Merchant'
	 */
	const VALUE_MERCHANT = 'Merchant';
	/**
	 * Constant for value 'eBayItem'
	 * @return string 'eBayItem'
	 */
	const VALUE_EBAYITEM = 'eBayItem';
	/**
	 * Constructor
	 * @return PayPalTypeChannelType
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
		return in_array($_value,array(self::VALUE_MERCHANT,self::VALUE_EBAYITEM));
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