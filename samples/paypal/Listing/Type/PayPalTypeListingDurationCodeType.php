<?php
/**
 * Class file for PayPalTypeListingDurationCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeListingDurationCodeType
 * @date 14/07/2012
 */
class PayPalTypeListingDurationCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Days_1'
	 * Meta informations :
	 * 	- documentation : 1 Day
	 * @return string 'Days_1'
	 */
	const VALUE_DAYS_1 = 'Days_1';
	/**
	 * Constant for value 'Days_3'
	 * Meta informations :
	 * 	- documentation : 3 Days
	 * @return string 'Days_3'
	 */
	const VALUE_DAYS_3 = 'Days_3';
	/**
	 * Constant for value 'Days_5'
	 * Meta informations :
	 * 	- documentation : 5 Days
	 * @return string 'Days_5'
	 */
	const VALUE_DAYS_5 = 'Days_5';
	/**
	 * Constant for value 'Days_7'
	 * Meta informations :
	 * 	- documentation : 7 Days
	 * @return string 'Days_7'
	 */
	const VALUE_DAYS_7 = 'Days_7';
	/**
	 * Constant for value 'Days_10'
	 * Meta informations :
	 * 	- documentation : 10 Days
	 * @return string 'Days_10'
	 */
	const VALUE_DAYS_10 = 'Days_10';
	/**
	 * Constant for value 'Days_30'
	 * Meta informations :
	 * 	- documentation : 30 Days
	 * @return string 'Days_30'
	 */
	const VALUE_DAYS_30 = 'Days_30';
	/**
	 * Constant for value 'Days_60'
	 * Meta informations :
	 * 	- documentation : 60 Days
	 * @return string 'Days_60'
	 */
	const VALUE_DAYS_60 = 'Days_60';
	/**
	 * Constant for value 'Days_90'
	 * Meta informations :
	 * 	- documentation : 90 Days
	 * @return string 'Days_90'
	 */
	const VALUE_DAYS_90 = 'Days_90';
	/**
	 * Constant for value 'Days_120'
	 * Meta informations :
	 * 	- documentation : 120 Days
	 * @return string 'Days_120'
	 */
	const VALUE_DAYS_120 = 'Days_120';
	/**
	 * Constant for value 'GTC'
	 * Meta informations :
	 * 	- documentation : GTC
	 * @return string 'GTC'
	 */
	const VALUE_GTC = 'GTC';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeListingDurationCodeType
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
		return in_array($_value,array(self::VALUE_DAYS_1,self::VALUE_DAYS_3,self::VALUE_DAYS_5,self::VALUE_DAYS_7,self::VALUE_DAYS_10,self::VALUE_DAYS_30,self::VALUE_DAYS_60,self::VALUE_DAYS_90,self::VALUE_DAYS_120,self::VALUE_GTC,self::VALUE_CUSTOMCODE));
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