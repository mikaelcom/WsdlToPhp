<?php
/**
 * Class file for XiMoneyMarketsTypeSwapCurrencyTypes
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeSwapCurrencyTypes
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeSwapCurrencyTypes extends XiMoneyMarketsWsdlClass
{
	/**
	 * Constant for value 'USD'
	 * @return string 'USD'
	 */
	const VALUE_USD = 'USD';
	/**
	 * Constant for value 'EUR'
	 * @return string 'EUR'
	 */
	const VALUE_EUR = 'EUR';
	/**
	 * Constant for value 'GBP'
	 * @return string 'GBP'
	 */
	const VALUE_GBP = 'GBP';
	/**
	 * Constant for value 'CHF'
	 * @return string 'CHF'
	 */
	const VALUE_CHF = 'CHF';
	/**
	 * Constant for value 'JPY'
	 * @return string 'JPY'
	 */
	const VALUE_JPY = 'JPY';
	/**
	 * Constant for value 'AUD'
	 * @return string 'AUD'
	 */
	const VALUE_AUD = 'AUD';
	/**
	 * Constant for value 'CAD'
	 * @return string 'CAD'
	 */
	const VALUE_CAD = 'CAD';
	/**
	 * Constant for value 'DKK'
	 * @return string 'DKK'
	 */
	const VALUE_DKK = 'DKK';
	/**
	 * Constant for value 'NZD'
	 * @return string 'NZD'
	 */
	const VALUE_NZD = 'NZD';
	/**
	 * Constant for value 'NOK'
	 * @return string 'NOK'
	 */
	const VALUE_NOK = 'NOK';
	/**
	 * Constant for value 'ISK'
	 * @return string 'ISK'
	 */
	const VALUE_ISK = 'ISK';
	/**
	 * Constant for value 'SGD'
	 * @return string 'SGD'
	 */
	const VALUE_SGD = 'SGD';
	/**
	 * Constant for value 'PLN'
	 * @return string 'PLN'
	 */
	const VALUE_PLN = 'PLN';
	/**
	 * Constant for value 'SEK'
	 * @return string 'SEK'
	 */
	const VALUE_SEK = 'SEK';
	/**
	 * Constant for value 'CZK'
	 * @return string 'CZK'
	 */
	const VALUE_CZK = 'CZK';
	/**
	 * Constant for value 'HUF'
	 * @return string 'HUF'
	 */
	const VALUE_HUF = 'HUF';
	/**
	 * Constant for value 'SAR'
	 * @return string 'SAR'
	 */
	const VALUE_SAR = 'SAR';
	/**
	 * Constant for value 'THB'
	 * @return string 'THB'
	 */
	const VALUE_THB = 'THB';
	/**
	 * Constant for value 'TWD'
	 * @return string 'TWD'
	 */
	const VALUE_TWD = 'TWD';
	/**
	 * Constant for value 'ZAR'
	 * @return string 'ZAR'
	 */
	const VALUE_ZAR = 'ZAR';
	/**
	 * Constant for value 'MXN'
	 * @return string 'MXN'
	 */
	const VALUE_MXN = 'MXN';
	/**
	 * Constant for value 'KRW'
	 * @return string 'KRW'
	 */
	const VALUE_KRW = 'KRW';
	/**
	 * Constant for value 'SKK'
	 * @return string 'SKK'
	 */
	const VALUE_SKK = 'SKK';
	/**
	 * Constant for value 'TRY'
	 * @return string 'TRY'
	 */
	const VALUE_TRY = 'TRY';
	/**
	 * Constant for value 'HKD'
	 * @return string 'HKD'
	 */
	const VALUE_HKD = 'HKD';
	/**
	 * Constant for value 'IDR'
	 * @return string 'IDR'
	 */
	const VALUE_IDR = 'IDR';
	/**
	 * Constant for value 'INR'
	 * @return string 'INR'
	 */
	const VALUE_INR = 'INR';
	/**
	 * Constant for value 'MYR'
	 * @return string 'MYR'
	 */
	const VALUE_MYR = 'MYR';
	/**
	 * Constant for value 'PHP'
	 * @return string 'PHP'
	 */
	const VALUE_PHP = 'PHP';
	/**
	 * Constant for value 'CNY'
	 * @return string 'CNY'
	 */
	const VALUE_CNY = 'CNY';
	/**
	 * Constructor
	 * @return XiMoneyMarketsTypeSwapCurrencyTypes
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
		return in_array($_value,array(self::VALUE_USD,self::VALUE_EUR,self::VALUE_GBP,self::VALUE_CHF,self::VALUE_JPY,self::VALUE_AUD,self::VALUE_CAD,self::VALUE_DKK,self::VALUE_NZD,self::VALUE_NOK,self::VALUE_ISK,self::VALUE_SGD,self::VALUE_PLN,self::VALUE_SEK,self::VALUE_CZK,self::VALUE_HUF,self::VALUE_SAR,self::VALUE_THB,self::VALUE_TWD,self::VALUE_ZAR,self::VALUE_MXN,self::VALUE_KRW,self::VALUE_SKK,self::VALUE_TRY,self::VALUE_HKD,self::VALUE_IDR,self::VALUE_INR,self::VALUE_MYR,self::VALUE_PHP,self::VALUE_CNY));
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