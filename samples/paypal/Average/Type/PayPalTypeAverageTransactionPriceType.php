<?php
/**
 * Class file for PayPalTypeAverageTransactionPriceType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAverageTransactionPriceType
 * @date 14/07/2012
 */
class PayPalTypeAverageTransactionPriceType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'AverageTransactionPrice-Not-Applicable'
	 * @return string 'AverageTransactionPrice-Not-Applicable'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_NOT_APPLICABLE = 'AverageTransactionPrice-Not-Applicable';
	/**
	 * Constant for value 'AverageTransactionPrice-Range1'
	 * @return string 'AverageTransactionPrice-Range1'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE1 = 'AverageTransactionPrice-Range1';
	/**
	 * Constant for value 'AverageTransactionPrice-Range2'
	 * @return string 'AverageTransactionPrice-Range2'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE2 = 'AverageTransactionPrice-Range2';
	/**
	 * Constant for value 'AverageTransactionPrice-Range3'
	 * @return string 'AverageTransactionPrice-Range3'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE3 = 'AverageTransactionPrice-Range3';
	/**
	 * Constant for value 'AverageTransactionPrice-Range4'
	 * @return string 'AverageTransactionPrice-Range4'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE4 = 'AverageTransactionPrice-Range4';
	/**
	 * Constant for value 'AverageTransactionPrice-Range5'
	 * @return string 'AverageTransactionPrice-Range5'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE5 = 'AverageTransactionPrice-Range5';
	/**
	 * Constant for value 'AverageTransactionPrice-Range6'
	 * @return string 'AverageTransactionPrice-Range6'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE6 = 'AverageTransactionPrice-Range6';
	/**
	 * Constant for value 'AverageTransactionPrice-Range7'
	 * @return string 'AverageTransactionPrice-Range7'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE7 = 'AverageTransactionPrice-Range7';
	/**
	 * Constant for value 'AverageTransactionPrice-Range8'
	 * @return string 'AverageTransactionPrice-Range8'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE8 = 'AverageTransactionPrice-Range8';
	/**
	 * Constant for value 'AverageTransactionPrice-Range9'
	 * @return string 'AverageTransactionPrice-Range9'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE9 = 'AverageTransactionPrice-Range9';
	/**
	 * Constant for value 'AverageTransactionPrice-Range10'
	 * @return string 'AverageTransactionPrice-Range10'
	 */
	const VALUE_AVERAGETRANSACTIONPRICE_RANGE10 = 'AverageTransactionPrice-Range10';
	/**
	 * Constructor
	 * @return PayPalTypeAverageTransactionPriceType
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
		return in_array($_value,array(self::VALUE_AVERAGETRANSACTIONPRICE_NOT_APPLICABLE,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE1,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE2,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE3,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE4,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE5,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE6,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE7,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE8,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE9,self::VALUE_AVERAGETRANSACTIONPRICE_RANGE10));
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