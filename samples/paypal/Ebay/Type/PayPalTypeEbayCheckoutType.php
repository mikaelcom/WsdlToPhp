<?php
/**
 * Class file for PayPalTypeEbayCheckoutType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeEbayCheckoutType
 * @date 14/07/2012
 */
class PayPalTypeEbayCheckoutType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'Auction'
	 * @return string 'Auction'
	 */
	const VALUE_AUCTION = 'Auction';
	/**
	 * Constant for value 'BuyItNow'
	 * @return string 'BuyItNow'
	 */
	const VALUE_BUYITNOW = 'BuyItNow';
	/**
	 * Constant for value 'FixedPriceItem'
	 * @return string 'FixedPriceItem'
	 */
	const VALUE_FIXEDPRICEITEM = 'FixedPriceItem';
	/**
	 * Constant for value 'Autopay'
	 * @return string 'Autopay'
	 */
	const VALUE_AUTOPAY = 'Autopay';
	/**
	 * Constructor
	 * @return PayPalTypeEbayCheckoutType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_AUCTION,self::VALUE_BUYITNOW,self::VALUE_FIXEDPRICEITEM,self::VALUE_AUTOPAY));
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